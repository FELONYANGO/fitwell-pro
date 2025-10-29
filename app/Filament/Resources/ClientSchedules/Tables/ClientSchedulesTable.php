<?php

namespace App\Filament\Resources\ClientSchedules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientSchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client.id')
                    ->searchable(),
                TextColumn::make('trainer.name')
                    ->searchable(),
                TextColumn::make('scheduled_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('start_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('end_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('session_type')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge(),
                TextColumn::make('completed_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('actual_duration_minutes')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('performance_rating')
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
}
