<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Mail\Markdown;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Заголовок'),
                MarkdownEditor::make('description')
                    ->columnSpanFull()
                    ->required()
                    ->label('Описание'),
                FileUpload::make('image_path')
                    ->image()
                    ->directory('images/banners')
                    ->disk('public')
                    ->required()
                    ->label('Изображение'),
                TextInput::make('link_url')
                    ->url()
                    ->label('Ссылка для кнопки "Подробнее"'),
                TextInput::make('position')
                    ->required()
                    ->numeric()
                    ->default(1000)
                    ->label('Порядок сортировки'),
                Toggle::make('active')
                    ->required()
                    ->default(true)
                    ->label('Активен'),
            ]);
    }
}
