<?php

namespace App\Filament\Resources;

use App\Filament\RelationManagers\SkillsRelationManager;
use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\EducationResource\Pages;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class EducationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('institution')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('degree')
                    ->required(),
                Forms\Components\Textarea::make('field_of_study')
                    ->required(),
                Forms\Components\Select::make('skills')
                    ->label('Skills')
                    ->multiple()
                    ->relationship('skills', 'name')
                    ->searchable(),
                Forms\Components\Select::make('technologies')
                    ->label('Technologies')
                    ->multiple()
                    ->relationship('technologies', 'name'),
                Forms\Components\MarkdownEditor::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('grade'),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\DatePicker::make('end_date'),
                Forms\Components\Toggle::make('home_page'),
                Forms\Components\Toggle::make('is_current')
                    ->required(),
                Forms\Components\Toggle::make('published'),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->directory('thumbnails')
                    ->visibility('public'),
                Forms\Components\TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('grade')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_current')
                    ->boolean(),
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
