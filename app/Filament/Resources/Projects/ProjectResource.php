<?php

namespace App\Filament\Resources\Projects;

use App\Filament\Forms\SeoTab;
use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\Projects\Pages\CreateProject;
use App\Filament\Resources\Projects\Pages\EditProject;
use App\Filament\Resources\Projects\Pages\ListProjects;
use App\Models\Project;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class ProjectResource extends Resource
{
    use Translatable;

    protected static ?string $model = Project::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-code-bracket';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Project Tabs')
                    ->tabs([
                        Tabs\Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Basic Information')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required(),
                                        Textarea::make('short_desc')
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                                Section::make('Detailed Description')
                                    ->schema([
                                        MarkdownEditor::make('description')
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Media')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Grid::make(2)->schema([
                                    Section::make('Thumbnail')
                                        ->schema([
                                            FileUpload::make('thumbnail')
                                                ->image()
                                                ->directory('thumbnails')
                                                ->visibility('public'),
                                        ])->columnSpan(1),
                                    Section::make('Screenshots')
                                        ->schema([
                                            FileUpload::make('screenshots')
                                                ->multiple()
                                                ->image()
                                                ->directory('screenshots')
                                                ->visibility('public'),
                                        ])->columnSpan(1),
                                ]),
                            ]),
                        Tabs\Tab::make('Links & Tech')
                            ->icon(Heroicon::Link)
                            ->schema([
                                Grid::make(2)->schema([
                                    Section::make('Technologies')
                                        ->schema([
                                            Select::make('technologies')
                                                ->relationship('technologies', 'name')
                                                ->multiple()
                                                ->preload()
                                                ->searchable(),
                                        ])->columnSpan(1),
                                    Section::make('Links')
                                        ->schema([
                                            TextInput::make('live_url')
                                                ->url(),
                                            TextInput::make('repo_url')
                                                ->url(),
                                        ])->columnSpan(1),
                                ]),
                            ]),
                        Tabs\Tab::make('Settings')
                            ->icon(Heroicon::Cog6Tooth)
                            ->schema([
                                Section::make('Status & Ordering')
                                    ->schema([
                                        Grid::make(3)->schema([
                                            Toggle::make('published')
                                                ->default(false),
                                            Toggle::make('home_page')
                                                ->label('Show on Home Page')
                                                ->default(false),
                                            TextInput::make('order')
                                                ->required()
                                                ->numeric()
                                                ->default(0),
                                        ]),
                                    ]),
                            ]),
                        SeoTab::make(),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('thumbnail_url')
                    ->searchable(),
                TextColumn::make('live_url')
                    ->searchable(),
                TextColumn::make('repo_url')
                    ->searchable(),
                TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            TechnologiesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
}
