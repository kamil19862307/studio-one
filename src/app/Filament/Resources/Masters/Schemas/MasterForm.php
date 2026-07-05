<?php

namespace App\Filament\Resources\Masters\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MasterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),

                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->directory('images/masters')
                    ->visibility('public'),

                TextInput::make('experience')
                    ->numeric(),
                TextInput::make('description'),
                TextInput::make('instagram'),
                TextInput::make('telegram'),
            ]);
    }
}
