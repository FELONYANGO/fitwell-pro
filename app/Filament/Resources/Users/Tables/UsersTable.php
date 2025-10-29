<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('username')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('user_type')
                    ->badge(),
                TextColumn::make('gender')
                    ->badge(),
                TextColumn::make('age')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('height')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('fitness_level')
                    ->badge(),
                TextColumn::make('activity_level')
                    ->badge(),
                TextColumn::make('profile_picture')
                    ->searchable(),
                TextColumn::make('provider_id')
                    ->searchable(),
                TextColumn::make('provider_name')
                    ->searchable(),
                IconColumn::make('needs_profile_completion')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('stripe_id')
                    ->searchable(),
                TextColumn::make('pm_type')
                    ->searchable(),
                TextColumn::make('pm_last_four')
                    ->searchable(),
                TextColumn::make('trial_ends_at')
                    ->dateTime()
                    ->sortable(),
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
