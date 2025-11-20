<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrainingResource\Pages;
use App\Models\Training;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TrainingResource extends Resource
{
    protected static ?string $model = Training::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->lazy() // <-- Tidak reactive per-huruf, tunggu selesai ngetik
                ->afterStateUpdated(function ($state, callable $set) {
                    $set('slug', \Str::slug($state));
                }),

            Forms\Components\TextInput::make('slug')
                ->helperText('Biarkan kosong jika ingin otomatis dari title.'),
            Forms\Components\Textarea::make('description')
                ->required(),
            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required(),
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),
            Forms\Components\FileUpload::make('thumbnail')
                ->directory('thumbnails')
                ->disk('public')
                ->visibility('public'),
            Forms\Components\FileUpload::make('module_file')
                ->label('Module File')
                ->directory('modules')
                ->acceptedFileTypes(['application/pdf', 'application/zip'])
                ->preserveFilenames()
                ->nullable(),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->searchable(),
            Tables\Columns\TextColumn::make('category.name')->label('Category'),
            Tables\Columns\TextColumn::make('price')->money('IDR'),
            Tables\Columns\ImageColumn::make('thumbnail')->square(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

       public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrainings::route('/'),
            'create' => Pages\CreateTraining::route('/create'),
            'edit' => Pages\EditTraining::route('/{record}/edit'),
        ];
    } 

}
