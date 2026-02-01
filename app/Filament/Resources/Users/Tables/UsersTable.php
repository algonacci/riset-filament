<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('username')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('role')
                    ->badge(),
                TextColumn::make('manager_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('company_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('full_name')
                    ->searchable(),
                TextColumn::make('gender')
                    ->badge(),
                TextColumn::make('id_number')
                    ->searchable(),
                TextColumn::make('birth_place')
                    ->searchable(),
                TextColumn::make('birth_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('religion')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('marital_status')
                    ->badge(),
                TextColumn::make('unit')
                    ->searchable(),
                TextColumn::make('join_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('employment_status')
                    ->badge(),
                TextColumn::make('employment_start_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('employment_end_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('employment_position')
                    ->searchable(),
                TextColumn::make('organization_unit')
                    ->searchable(),
                TextColumn::make('work_location')
                    ->searchable(),
                TextColumn::make('employee_status')
                    ->badge(),
                IconColumn::make('is_lock')
                    ->boolean(),
                TextColumn::make('terminate_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('leave_allowance')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('shift_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bank_name')
                    ->searchable(),
                TextColumn::make('bank_account_number')
                    ->searchable(),
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
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
