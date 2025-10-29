<?php

namespace App\Filament\Resources\Goals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GoalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client.id')
                    ->searchable(),
                TextColumn::make('trainer.name')
                    ->searchable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('category')
                    ->badge(),
                TextColumn::make('type')
                    ->badge(),
                TextColumn::make('measurement_type')
                    ->badge(),
                TextColumn::make('target_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('target_unit')
                    ->searchable(),
                TextColumn::make('current_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('target_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge(),
                TextColumn::make('priority')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_active_for_matching')
                    ->boolean(),
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
}
