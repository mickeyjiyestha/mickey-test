<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textinput::make('title')->label('Title')->required(),
                Textinput::make('quantity')->label('Quantity')->required(),
            ]);
    }
}
