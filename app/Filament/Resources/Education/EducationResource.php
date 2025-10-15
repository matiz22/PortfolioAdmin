<?php

namespace App\Filament\Resources\Education;

use App\Filament\RelationManagers\SkillsRelationManager;
use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\Education\Pages\CreateEducation;
use App\Filament\Resources\Education\Pages\EditEducation;
use App\Filament\Resources\Education\Pages\ListEducation;
use App\Filament\Resources\EducationResource\Pages;
use App\Models\Education;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

//use App\Filament\RelationManagers\SkillsRelationManager;


class EducationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Education::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('institution')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('degree')
                    ->required(),
                Textarea::make('field_of_study')
                    ->required(),
                Select::make('skills')
                    ->label('Skills')
                    ->multiple()
                    ->relationship('skills', 'name')
                    ->searchable(),
                Select::make('technologies')
                    ->label('Technologies')
                    ->multiple()
                    ->relationship('technologies', 'name'),
                MarkdownEditor::make('description')
                    ->columnSpanFull(),
                TextInput::make('grade'),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date'),
                Toggle::make('home_page'),
                Toggle::make('is_current')
                    ->required(),
                Toggle::make('published'),
                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('thumbnails')
                    ->visibility('public'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('grade')
                    ->searchable(),
                TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                IconColumn::make('is_current')
                    ->boolean(),
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
            'index' => ListEducation::route('/'),
            'create' => CreateEducation::route('/create'),
            'edit' => EditEducation::route('/{record}/edit'),
        ];
    }
}
