<?php

namespace App\Filament\Resources\Proficiencies;

use App\Filament\Resources\Proficiencies\Pages\CreateProficiency;
use App\Filament\Resources\Proficiencies\Pages\EditProficiency;
use App\Filament\Resources\Proficiencies\Pages\ListProficiencies;
use App\Filament\Resources\ProficiencyResource\Pages;
use App\Models\Proficiency;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class ProficiencyResource extends Resource
{
    use Translatable;

    protected static ?string $model = Proficiency::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-arrow-up-right';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('name')
                    ->required(),
                ColorPicker::make('color'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                ColorColumn::make('color')
                    ->label('Color'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProficiencies::route('/'),
            'create' => CreateProficiency::route('/create'),
            'edit' => EditProficiency::route('/{record}/edit'),
        ];
    }
}
