<?php

namespace App\Filament\Resources;

use App\Filament\RelationManagers\SkillsRelationManager;
use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\RealizationResource\Pages;
use App\Models\Realization;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RealizationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Realization::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('client_name')
                    ->required(),
                Forms\Components\Textarea::make('short_desc')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('client_logo')
                    ->image()
                    ->directory('clients')
                    ->visibility('public'),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->directory('thumbnails')
                    ->visibility('public'),
                Forms\Components\TextInput::make('client_url')
                    ->url(),
                Forms\Components\TextInput::make('location'),
                Forms\Components\Select::make('technologies')
                    ->relationship('technologies', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
                Forms\Components\Select::make('skills')
                    ->relationship('skills', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
                Forms\Components\Toggle::make('home_page')
                    ->label('Show on Home Page')
                    ->default(false),
                Forms\Components\Toggle::make('published')
                    ->default(false),
                Forms\Components\TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\MarkdownEditor::make('description')
                    ->columnSpanFull(),
                //TODO uploads
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client_logo_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRealizations::route('/'),
            'create' => Pages\CreateRealization::route('/create'),
            'edit' => Pages\EditRealization::route('/{record}/edit'),
        ];
    }
}
