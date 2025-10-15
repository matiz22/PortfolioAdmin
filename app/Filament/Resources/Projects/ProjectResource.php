<?php

namespace App\Filament\Resources\Projects;

use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\ProjectResource\Pages;
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
use Filament\Schemas\Schema;
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
                Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('short_desc')
                    ->required()
                    ->columnSpanFull(),
                MarkdownEditor::make('description')
                    ->columnSpanFull(),
                Select::make('technologies')
                    ->relationship('technologies', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('thumbnails')
                    ->visibility('public'),
                TextInput::make('live_url')
                    ->url(),
                TextInput::make('repo_url')
                    ->url(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('home_page')
                    ->label('Show on Home Page')
                    ->default(false),
                Toggle::make('published')
                    ->default(false),
                FileUpload::make('screenshots')
                    ->multiple()
                    ->image()
                    ->directory('screenshots')
                    ->visibility('public')
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
