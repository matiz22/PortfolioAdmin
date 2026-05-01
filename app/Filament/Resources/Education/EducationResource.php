<?php

namespace App\Filament\Resources\Education;

use App\Filament\Forms\SeoTab;
use App\Filament\RelationManagers\SkillsRelationManager;
use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\Education\Pages\CreateEducation;
use App\Filament\Resources\Education\Pages\EditEducation;
use App\Filament\Resources\Education\Pages\ListEducation;
use App\Models\Education;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class EducationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Education::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Education Tabs')
                    ->tabs([
                        Tabs\Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Academic Info')
                                    ->schema([
                                        TextInput::make('institution')
                                            ->required(),
                                        Grid::make(2)->schema([
                                            TextInput::make('degree')
                                                ->required(),
                                            TextInput::make('field_of_study')
                                                ->required(),
                                        ]),
                                        TextInput::make('grade'),
                                    ]),
                                Section::make('Description')
                                    ->schema([
                                        MarkdownEditor::make('description')
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Timeline')
                            ->icon(Heroicon::Calendar)
                            ->schema([
                                Section::make('Duration')
                                    ->schema([
                                        Grid::make(2)->schema([
                                            DatePicker::make('start_date')
                                                ->required(),
                                            DatePicker::make('end_date'),
                                        ]),
                                        Toggle::make('is_current')
                                            ->required(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Associations')
                            ->icon(Heroicon::CommandLine)
                            ->schema([
                                Section::make('Skills & Technologies')
                                    ->schema([
                                        Grid::make(2)->schema([
                                            Select::make('skills')
                                                ->label('Skills')
                                                ->multiple()
                                                ->relationship('skills', 'name')
                                                ->searchable(),
                                            Select::make('technologies')
                                                ->label('Technologies')
                                                ->multiple()
                                                ->relationship('technologies', 'name'),
                                        ]),
                                    ]),
                            ]),
                        Tabs\Tab::make('Media')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Section::make('Media Assets')
                                    ->schema([
                                        FileUpload::make('thumbnail')
                                            ->image()
                                            ->directory('thumbnails')
                                            ->visibility('public'),
                                    ]),
                            ]),
                        Tabs\Tab::make('Settings')
                            ->icon(Heroicon::Cog6Tooth)
                            ->schema([
                                Section::make('Visibility & Order')
                                    ->schema([
                                        Grid::make(3)->schema([
                                            Toggle::make('published'),
                                            Toggle::make('home_page'),
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
