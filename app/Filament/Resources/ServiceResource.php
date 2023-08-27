<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Filament\Resources\ServiceResource\RelationManagers\AdditionServicesRelationManager;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationGroup = "Service Management";

    public static function form(Form $form): Form
    {
        return $form
            ->columns([
                'sm' => 1,
                "xl" => 1
            ])
            ->schema([
                TextInput::make('title'),
                TextInput::make('solution'),
                RichEditor::make('short_detail'),
                RichEditor::make('detail')->label('Long Details'),
                FileUpload::make('service_icon')
                    ->directory('services'),
                FileUpload::make('service_image')
                    ->directory('services'),
                Select::make('addition_service_id')
                    ->relationship('additionServices', 'additional_info')->allowHtml()->multiple()
                    ->createOptionForm([
                        TextInput::make('title'),
                        RichEditor::make('additional_info')->label('Long Details'),
                        FileUpload::make('additional_img')
                            ->directory('services'),
                    ]),
                Repeater::make('steps')
                    ->schema([
                        TextInput::make('step_icons')->required()->label("Step Icon"),
                        TextInput::make('step_name')->required(),
                        TextInput::make('step_detail'),

                    ])->defaultItems(1)


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('service_image')->size(80)->circular(),
                TextColumn::make('title')->searchable(),
                TextColumn::make('short_detail')->html()->limit(40),
                ToggleColumn::make('is_featured')->label('Featured'),

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
            // AdditionServicesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
