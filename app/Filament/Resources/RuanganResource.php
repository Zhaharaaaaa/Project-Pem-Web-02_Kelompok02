<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RuanganResource\Pages;
use App\Filament\Resources\RuanganResource\RelationManagers;
use App\Models\Ruangan;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use function Laravel\Prompts\multiselect;

class RuanganResource extends Resource
{
    protected static ?string $model = Ruangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar')
                    ->directory('ruangans')
                    ->label('Ruangan')
                    ->image()
                    ->disk('public')
                    ->imagePreviewHeight(150)
                    ->maxsize(2048),
                TextInput::make('nama')
                    ->label('Nama Ruangan')
                    ->required()
                    ->maxLength(50),
                TextInput::make('kode')
                    ->label('Kode Ruangan')
                    ->required()
                    ->maxLength(20),
                TextInput::make('lokasi_ruangan')
                    ->label('Lokasi Ruangan')
                    ->required()
                    ->maxLength(100),
                TextInput::make('kapasitas')
                    ->label('Kapasitas')
                    ->required()
                    ->numeric()
                    ->default(0),
                MultiSelect::make('fasilitas')
                    ->relationship('fasilitas', 'nama')
                    ->label('Fasilitas Ruangan')
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('status')
                    ->label('Status Ruangan')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Dibooking' => 'Dibooking',
                        'Renovasi' => 'Renovasi',
                    ])
                    ->default('Tersedia')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')->disk('public')->width(60)
                    ->label('Ruangan')
                    ->height(100)
                    ->width(100),
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('kode')->searchable()->sortable(),
                TextColumn::make('lokasi_ruangan')->searchable()->sortable(),
                TextColumn::make('kapasitas')->searchable()->sortable(),
                TagsColumn::make('fasilitas.nama')
                ->label('Fasilitas')
                ->searchable()
                ->sortable()
                ->limit(5),
                TextColumn::make('status')
                ->badge()
                ->colors([
                'success' => 'Tersedia',
                'danger' => 'Dibooking',
                'warning' => 'Renovasi',
                ]) ->searchable()->sortable(),
            ])
            ->defaultSort('nama')
            ->filters([
                SelectFilter::make('lokasi_ruangan')
                    ->options([
                        'kampus A' => 'Kampus A',
                        'kampus B' => 'Kampus B',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
        //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRuangans::route('/'),
            'create' => Pages\CreateRuangan::route('/create'),
            'edit' => Pages\EditRuangan::route('/{record}/edit'),
            'view' => Pages\ViewRuangan::route('/{record}'), 
        ];
    }

}
