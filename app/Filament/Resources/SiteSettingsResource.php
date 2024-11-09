<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingsResource\Pages;
use App\Filament\Resources\SiteSettingsResource\RelationManagers;
use App\Models\SiteSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Site Ayarları';
    protected static ?string $navigationGroup = 'Genel Site Ayarları';
    protected static ?string $navigationIconBadge = 'heroicon-o-cog';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('site_name')
                    ->required()
                    ->label('Site Adı'),
                Forms\Components\Textarea::make('site_description')
                    ->required()
                    ->columnSpanFull()
                    ->label('Meta Açıklaması')
                    ->hint('(Arama motoru optimizasyonunun kısaltması olan SEO, arama motorlarının içeriğinizi anlamasına yardımcı olmak ve kullanıcıların sitenizi bulmasına ve sitenizi bir arama motoru aracılığıyla ziyaret edip etmeme konusunda karar vermesine yardımcı olmakla ilgilidir.) '),
                Forms\Components\Textarea::make('site_keywords')
                    ->required()
                    ->columnSpanFull()
                    ->label('Meta Kelimeleri')
                    ->hint('(Arama motoru optimizasyonunun kısaltması olan SEO, arama motorlarının içeriğinizi anlamasına yardımcı olmak ve kullanıcıların sitenizi bulmasına ve sitenizi bir arama motoru aracılığıyla ziyaret edip etmeme konusunda karar vermesine yardımcı olmakla ilgilidir.)'),
                Forms\Components\FileUpload::make('site_logo')
                    ->required()
                    ->image()
                    ->maxSize(2048),
                Forms\Components\FileUpload::make('site_favicon')
                    ->required()
                    ->image()
                    ->maxSize(1024),
                Forms\Components\TextInput::make('site_address')
                    ->required()
                    ->label('Site Adresi'),
                Forms\Components\TextInput::make('site_phone')
                    ->tel()
                    ->required()
                    ->label('Site Telefon Numarası'),
                Forms\Components\TextInput::make('site_email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('site_facebook')
                    ->required(),
                Forms\Components\TextInput::make('site_twitter')
                    ->required(),
                Forms\Components\TextInput::make('site_instagram')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('site_name')
                    ->label('Site Başlığı')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('site_logo')
                ->label('Site Logo'),
                Tables\Columns\ImageColumn::make('site_favicon')
                ->label('Site Favicon'),
                Tables\Columns\TextColumn::make('site_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_twitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSettings::route('/create'),
            'view' => Pages\ViewSiteSettings::route('/{record}'),
            'edit' => Pages\EditSiteSettings::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
