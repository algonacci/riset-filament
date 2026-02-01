<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('username')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password_hash')
                    ->password()
                    ->required(),
                Select::make('role')
                    ->options(['Admin' => 'Admin', 'Manager' => 'Manager', 'User' => 'User'])
                    ->default('User')
                    ->required(),
                TextInput::make('manager_id')
                    ->numeric(),
                TextInput::make('company_id')
                    ->required()
                    ->numeric(),
                TextInput::make('full_name')
                    ->required(),
                Select::make('gender')
                    ->options(['Laki-laki' => 'Laki laki', 'Perempuan' => 'Perempuan'])
                    ->required(),
                TextInput::make('id_number')
                    ->required(),
                TextInput::make('birth_place')
                    ->required(),
                DatePicker::make('birth_date')
                    ->required(),
                TextInput::make('religion'),
                TextInput::make('phone')
                    ->tel(),
                Select::make('marital_status')
                    ->options(['Belum Menikah' => 'Belum menikah', 'Menikah' => 'Menikah', 'Cerai' => 'Cerai'])
                    ->required(),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('unit'),
                DatePicker::make('join_date')
                    ->required(),
                Select::make('employment_status')
                    ->options(['Tetap' => 'Tetap', 'Kontrak' => 'Kontrak', 'Probation' => 'Probation', 'Magang' => 'Magang'])
                    ->required(),
                DatePicker::make('employment_start_date')
                    ->required(),
                DatePicker::make('employment_end_date'),
                TextInput::make('employment_position'),
                TextInput::make('organization_unit'),
                TextInput::make('work_location'),
                Select::make('employee_status')
                    ->options(['Active' => 'Active', 'Inactive' => 'Inactive', 'Terminated' => 'Terminated'])
                    ->default('Active')
                    ->required(),
                Toggle::make('is_lock'),
                DatePicker::make('terminate_date'),
                TextInput::make('leave_allowance')
                    ->numeric()
                    ->default(12),
                TextInput::make('shift_id')
                    ->numeric(),
                TextInput::make('bank_name'),
                TextInput::make('bank_account_number'),
            ]);
    }
}
