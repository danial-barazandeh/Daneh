<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('content')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('seoTitle')
                    ->maxLength(255),
                Forms\Components\TextInput::make('seoDescription')
                    ->maxLength(255),
                // Forms\Components\TagsInput::make('seoKeys'),
                Forms\Components\Toggle::make('published')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name'),
                Forms\Components\Select::make('image_id')
                    ->relationship('image', 'title'),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('salePrice')
                    ->maxLength(255),
                Forms\Components\Toggle::make('free'),
                Forms\Components\TextInput::make('time')
                    ->maxLength(255),
                Forms\Components\TextInput::make('introUrl')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('seoTitle')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('seoDescription')
                //     ->searchable(),
                // Tables\Columns\IconColumn::make('published')
                //     ->boolean(),
                // Tables\Columns\TextColumn::make('user_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('price')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('salePrice')
                //     ->searchable(),
                // Tables\Columns\IconColumn::make('free')
                //     ->boolean(),
                // Tables\Columns\TextColumn::make('time')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('introUrl')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
