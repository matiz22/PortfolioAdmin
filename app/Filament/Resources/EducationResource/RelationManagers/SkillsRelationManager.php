<?php

namespace App\Filament\Resources\EducationResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class SkillsRelationManager extends RelationManager
{
    protected static string $relationship = 'skills';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('name')
                    ->required(),
                Forms\Components\Select::make('proficiency_id')
                    ->relationship('proficiency', 'name'),
                Forms\Components\TextInput::make('order')
                    ->numeric(),
                Forms\Components\FileUpload::make('icon')
                    ->image()
                    ->directory('icons')
                    ->visibility('public')
                    ->deleteUploadedFileUsing(function ($file) {
                        if (Storage::exists($file)) {
                            Storage::delete($file);
                        }
                    }),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
