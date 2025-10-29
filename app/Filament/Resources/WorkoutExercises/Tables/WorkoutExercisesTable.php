<?php

namespace App\Filament\Resources\WorkoutExercises\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WorkoutExercisesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('workout_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('exercise_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sets')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('reps')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('duration_seconds')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('distance')
                    ->numeric()
                    ->sortable(),
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
}
