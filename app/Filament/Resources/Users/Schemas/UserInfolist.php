<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('username'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('role')
                    ->badge(),
                TextEntry::make('manager_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('company_id')
                    ->numeric(),
                TextEntry::make('full_name'),
                TextEntry::make('gender')
                    ->badge(),
                TextEntry::make('id_number'),
                TextEntry::make('birth_place'),
                TextEntry::make('birth_date')
                    ->date(),
                TextEntry::make('religion')
                    ->placeholder('-'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('marital_status')
                    ->badge(),
                TextEntry::make('address')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('unit')
                    ->placeholder('-'),
                TextEntry::make('join_date')
                    ->date(),
                TextEntry::make('employment_status')
                    ->badge(),
                TextEntry::make('employment_start_date')
                    ->date(),
                TextEntry::make('employment_end_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('employment_position')
                    ->placeholder('-'),
                TextEntry::make('organization_unit')
                    ->placeholder('-'),
                TextEntry::make('work_location')
                    ->placeholder('-'),
                TextEntry::make('employee_status')
                    ->badge(),
                IconEntry::make('is_lock')
                    ->boolean()
                    ->placeholder('-'),
                TextEntry::make('terminate_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('leave_allowance')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('shift_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('bank_name')
                    ->placeholder('-'),
                TextEntry::make('bank_account_number')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
