<?php

namespace App\Filament\Resources\Certifications;

use App\Filament\Forms\SeoTab;
use App\Filament\RelationManagers\SkillsRelationManager;
use App\Filament\RelationManagers\TechnologiesRelationManager;
use App\Filament\Resources\Certifications\Pages\CreateCertification;
use App\Filament\Resources\Certifications\Pages\EditCertification;
use App\Filament\Resources\Certifications\Pages\ListCertifications;
use App\Models\Certification;
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
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class CertificationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Certification::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-check-badge';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Certification Tabs')
                    ->tabs([
                        Tabs\Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Certification Details')
                                    ->schema([
                                        TextInput::make('name')
                                            ->required(),
                                        TextInput::make('issuing_organization')
                                            ->required(),
                                        Textarea::make('short_desc')
                                            ->columnSpanFull(),
                                    ]),
                                Section::make('Full Description')
                                    ->schema([
                                        MarkdownEditor::make('description')
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Credentials')
                            ->icon(Heroicon::Identification)
                            ->schema([
                                Section::make('Validation Info')
                                    ->schema([
                                        Grid::make(2)->schema([
                                            TextInput::make('credential_id'),
                                            TextInput::make('credential_url')
                                                ->url(),
                                        ]),
                                        Grid::make(2)->schema([
                                            DatePicker::make('issue_date'),
                                            DatePicker::make('expiration_date'),
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
                TextColumn::make('issuing_organization')
                    ->searchable(),
                TextColumn::make('issue_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('expiration_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('credential_id')
                    ->searchable(),
                TextColumn::make('credential_url')
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
            'index' => ListCertifications::route('/'),
            'create' => CreateCertification::route('/create'),
            'edit' => EditCertification::route('/{record}/edit'),
        ];
    }
}
