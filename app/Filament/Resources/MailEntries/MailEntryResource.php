<?php

namespace App\Filament\Resources\MailEntries;

use App\Filament\Resources\MailEntries\Pages\ListMailEntries;
use App\Filament\Resources\MailEntries\Pages\ViewMailEntry;
use App\Models\MailEntry;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MailEntryResource extends Resource
{
    protected static ?string $model = MailEntry::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-envelope-open';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Sender Information')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('from_name')
                                ->readOnly(),
                            TextInput::make('from_email')
                                ->email()
                                ->readOnly(),
                        ]),
                        TextInput::make('form_name')
                            ->readOnly(),
                    ]),
                Section::make('Message Content')
                    ->schema([
                        TextInput::make('subject')
                            ->readOnly(),
                        Textarea::make('message')
                            ->readOnly()
                            ->rows(10)
                            ->columnSpanFull(),
                    ]),
                Section::make('System Information')
                    ->schema([
                        Textarea::make('error_message')
                            ->readOnly()
                            ->columnSpanFull(),
                    ])
                    ->collapsed(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('form_name')
                    ->searchable(),
                TextColumn::make('from_email')
                    ->searchable(),
                TextColumn::make('from_name')
                    ->searchable(),
                TextColumn::make('subject')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
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
            'index' => ListMailEntries::route('/'),
            'view' => ViewMailEntry::route('/{record}'),
        ];
    }
}
