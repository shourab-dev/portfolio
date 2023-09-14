<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HeroSection;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HeroSectionResource\Pages;
use App\Filament\Resources\HeroSectionResource\RelationManagers;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $label = 'My Hero Section';
    

    public static function form(Form $form): Form
    {
        return $form
            ->columns([
                'sm' => 1,
                'xl' => 2,

            ])
            ->schema([
                TextInput::make('name'),
                TextInput::make('title'),
                TextInput::make('expertise'),
                TextInput::make('experience'),
                TextInput::make('total_clients'),
                Repeater::make('featured_work')
                    ->schema([
                        TextInput::make('project')->required(),
                    ])
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 2,

                    ]),
                FileUpload::make('featured_img')
                    ->directory('uploads')
                    ->preserveFilenames()->columnSpan([
                        'sm' => 2,
                        'xl' => 2,

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            ImageColumn::make('featured_img')->size(80)->circular(),
                TextColumn::make('name'),
                TextColumn::make('title'),
                TextColumn::make('expertise'),
                TextColumn::make('total_clients'),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroSections::route('/'),
            'create' => Pages\CreateHeroSection::route('/create'),
            'edit' => Pages\EditHeroSection::route('/{record}/edit'),
        ];
    }
}
