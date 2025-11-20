<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificateResource\Pages;
use App\Models\Certificate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class CertificateResource extends Resource
{
    protected static ?string $model = Certificate::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('order_id')
                ->label('Nama Pemesan')
                ->options(
                    \App\Models\Order::with('user')
                        ->get()
                        ->mapWithKeys(fn ($order) => [
                            $order->id => $order->user->name . ' — ' . $order->training->title
                        ])
                )
                ->searchable()
                ->required(),

            Forms\Components\FileUpload::make('certificate_file')
                ->directory('certificates')
                ->disk('public')
                ->visibility('public')
                ->preserveFilenames()
                ->required(),
            Forms\Components\DateTimePicker::make('claimed_at')
                ->label('Claimed At'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('order.user.name')
                ->label('User')
                ->searchable(),

            Tables\Columns\TextColumn::make('order.training.title')
                ->label('Training'),

            Tables\Columns\TextColumn::make('certificate_file')
                ->label('File'),

            Tables\Columns\TextColumn::make('claimed_at')
                ->dateTime()
                ->label('Claimed'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCertificates::route('/'),
            'create' => Pages\CreateCertificate::route('/create'),
            'edit' => Pages\EditCertificate::route('/{record}/edit'),
        ];
    }

}
