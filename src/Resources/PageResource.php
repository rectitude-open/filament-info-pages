<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Resources;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use RalphJSmit\Filament\SEO\SEO;
use RectitudeOpen\FilamentInfoPages\Models\Page;
use RectitudeOpen\FilamentInfoPages\Resources\PageResource\Pages;

class PageResource extends Resource
{
    public static function getModel(): string
    {
        return config('filament-info-pages.model', Page::class);
    }

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-info-pages.navigation_icon', 'heroicon-o-document-text');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-info-pages.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-info-pages::filament-info-pages.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-info-pages::filament-info-pages.nav.group');
    }

    public static function form(Form $form): Form
    {
        $editorClass = config('filament-info-pages.editor_component_class', RichEditor::class);
        $editorComponent = $editorClass::make('content')
            ->label(__('filament-info-pages::filament-info-pages.field.content'))
            ->fileAttachmentsDisk('public')
            ->fileAttachmentsDirectory('uploads')
            ->fileAttachmentsVisibility('public')
            ->columnSpan('full');

        return $form
            ->schema([
                Grid::make(['sm' => 3])->schema([
                    Grid::make()->schema([
                        TextInput::make('title')
                            ->label(__('filament-info-pages::filament-info-pages.field.title'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        $editorComponent,
                        Section::make(__('filament-info-pages::filament-info-pages.field.seo'))
                            ->compact()
                            ->schema([
                                SEO::make(),
                            ])
                            ->collapsible(),
                    ])->columnSpan(['xl' => 2]),
                    Grid::make()->schema([
                        Section::make(__('filament-info-pages::filament-info-pages.field.meta'))
                            ->compact()
                            ->schema([
                                TextInput::make('slug')
                                    ->label(__('filament-info-pages::filament-info-pages.field.slug'))
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull(),
                                ToggleButtons::make('status')
                                    ->options([
                                        1 => __('filament-info-pages::filament-info-pages.field.status_published'),
                                        2 => __('filament-info-pages::filament-info-pages.field.status_draft'),
                                    ])
                                    ->default(1)
                                    ->colors([
                                        1 => 'success',
                                        2 => 'warning',
                                    ])
                                    ->icons([
                                        1 => 'heroicon-o-check-circle',
                                        2 => 'heroicon-o-x-circle',
                                    ])
                                    ->inline()
                                    ->inlineLabel(),
                                DateTimePicker::make('created_at')
                                    ->disabled()
                                    ->label(__('filament-info-pages::filament-info-pages.field.created_at'))
                                    ->native(false)
                                    ->default(now())
                                    ->suffixIcon('heroicon-o-calendar')
                                    ->columnSpanFull()
                                    ->inlineLabel()
                                    ->format(config('filament-info-pages.datetime_format', 'Y-m-d H:i:s'))
                                    ->displayFormat(config('filament-info-pages.datetime_format', 'Y-m-d H:i:s')),
                                DateTimePicker::make('updated_at')
                                    ->label(__('filament-info-pages::filament-info-pages.field.updated_at'))
                                    ->native(false)
                                    ->default(now())
                                    ->suffixIcon('heroicon-o-calendar')
                                    ->columnSpanFull()
                                    ->inlineLabel()
                                    ->format(config('filament-info-pages.datetime_format', 'Y-m-d H:i:s'))
                                    ->displayFormat(config('filament-info-pages.datetime_format', 'Y-m-d H:i:s')),
                            ])
                            ->collapsible(),
                        Section::make(__('filament-info-pages::filament-info-pages.field.featured_image'))
                            ->compact()
                            ->schema([
                                CuratorPicker::make('featured_image_id')
                                    ->relationship('featured_image', 'id')
                                    ->hiddenLabel()
                                    ->maxItems(1)
                                    ->directory('page')
                                    ->listDisplay(true),
                            ]),
                    ])->columnSpan(['xl' => 1]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('filament-info-pages::filament-info-pages.field.title'))
                    ->searchable()
                    ->limit(50),
                CuratorColumn::make('featured_image')
                    ->label('')
                    ->size(30),
                IconColumn::make('status')
                    ->label(__('filament-info-pages::filament-info-pages.field.status'))
                    ->icon(fn ($state): string => match ($state) {
                        1 => 'heroicon-o-check-circle',
                        2 => 'heroicon-o-x-circle',
                        default => 'heroicon-o-question-mark-circle',
                    })
                    ->color(fn ($state): string => match ($state) {
                        1 => 'success',
                        2 => 'danger',
                        default => 'warning',
                    }),
                TextColumn::make('updated_at')
                    ->label(__('filament-info-pages::filament-info-pages.field.updated_at'))
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label(__('filament-info-pages::filament-info-pages.field.status'))
                    ->options([
                        1 => 'Active',
                        2 => 'Suspended',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
            'revisions' => Pages\PageRevisions::route('/{record}/revisions'),
        ];
    }
}
