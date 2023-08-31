<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use App\Models\Portfolio;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PortfolioResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortfolioResource\RelationManagers;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?int $navigationSort = 5;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->columnSpan('2')->required(),
                Select::make('service_id')
                    ->label('Service Type')
                    ->options(Service::all()->pluck('title', 'id'))
                    ->searchable()->columnSpan('1')->required(),
                FileUpload::make('project_img')
                    ->directory('projects')->columnSpan('full'),
                TextInput::make('customer'),
                TextInput::make('location'),
                TextInput::make('live')->label("Live URL"),
                FileUpload::make('gallery')
                    ->multiple()
                    ->directory('projects')->columnSpan('full'),
            MarkdownEditor::make('detail')
            ->toolbarButtons([
                'attachFiles',
                'blockquote',
                'bold',
                'bulletList',
                'codeBlock',
                'heading',
                'italic',
                'link',
                'orderedList',
                'redo',
                'strike',
                'table',
                'undo',
            ])->columnSpan('full')


            ])->columns('3');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('project_img'),
            TextColumn::make('title'),
            TextColumn::make('customer'),
            TextColumn::make('created_at')
            ->dateTime("d M Y")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            // 'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
