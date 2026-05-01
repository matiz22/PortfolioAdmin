<?php

namespace App\Filament\Forms;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs\Tab;

class SeoTab
{
    public static function make(): Tab
    {
        return Tab::make('SEO')
            ->schema([
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Toggle::make('seo_enabled')
                    ->label('Enable SEO')
                    ->default(false),
                TextInput::make('seo_title')
                    ->label('SEO Title')
                    ->maxLength(255),
                Textarea::make('seo_description')
                    ->label('SEO Description')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
