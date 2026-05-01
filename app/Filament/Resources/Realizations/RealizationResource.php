<?php

namespace App\Filament\Resources\Realizations;

use App\Filament\Forms\SeoTab;
use App\Filament\RelationManagers\SkillsRelationManager;
use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\Realizations\Pages\CreateRealization;
use App\Filament\Resources\Realizations\Pages\EditRealization;
use App\Filament\Resources\Realizations\Pages\ListRealizations;
use App\Models\Realization;
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

class RealizationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Realization::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-s-check';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Realization Tabs')
                    ->tabs([
                        Tabs\Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Project Information')
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
                        Tabs\Tab::make('Client')
                            ->icon(Heroicon::UserGroup)
                            ->schema([
                                Section::make('Client Details')
                                    ->schema([
                                        Grid::make(2)->schema([
                                            TextInput::make('client_name')
                                                ->required(),
                                            TextInput::make('client_url')
                                                ->url(),
                                        ]),
                                        TextInput::make('location'),
                                        FileUpload::make('client_logo')
                                            ->image()
                                            ->directory('clients')
                                            ->visibility('public'),
                                    ]),
                            ]),
                        Tabs\Tab::make('Media')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Section::make('Visual Assets')
                                    ->schema([
                                        Grid::make(2)->schema([
                                            FileUpload::make('thumbnail')
                                                ->image()
                                                ->directory('thumbnails')
                                                ->visibility('public'),
                                            FileUpload::make('screenshots')
                                                ->multiple()
                                                ->image()
                                                ->directory('screenshots')
                                                ->visibility('public'),
                                        ]),
                                    ]),
                            ]),
                        Tabs\Tab::make('Associations')
                            ->icon(Heroicon::CommandLine)
                            ->schema([
                                Section::make('Skills & Technologies')
                                    ->schema([
                                        Grid::make(2)->schema([
                                            Select::make('skills')
                                                ->relationship('skills', 'name')
                                                ->multiple()
                                                ->preload()
                                                ->searchable(),
                                            Select::make('technologies')
                                                ->relationship('technologies', 'name')
                                                ->multiple()
                                                ->preload()
                                                ->searchable(),
                                        ]),
                                    ]),
                            ]),
                        Tabs\Tab::make('Settings')
                            ->icon(Heroicon::Cog6Tooth)
                            ->schema([
                                Section::make('Visibility & Order')
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
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('client_name')
                    ->searchable(),
                TextColumn::make('client_url')
                    ->searchable(),
                TextColumn::make('client_logo_url')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('thumbnail_url')
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
            SkillsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRealizations::route('/'),
            'create' => CreateRealization::route('/create'),
            'edit' => EditRealization::route('/{record}/edit'),
        ];
    }
}
