<?php

namespace App\Filament\Resources\ArtistResource\RelationManagers;

use App\Filament\Resources\TypeResource;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\RelationManager;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class TypesRelationManager extends RelationManager
{
    public static $primaryColumn = 'type';

    public static $relationship = 'types';

    public static function form(Form $form)
    {
        return TypeResource::form($form);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('type')->sortable()->searchable(),
            ])
            ->filters([
                //
            ]);
    }
}
