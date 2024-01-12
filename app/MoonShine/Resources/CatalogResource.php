<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog;

use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class CatalogResource extends ModelResource
{
    protected string $model = Catalog::class;

    protected string $title = 'Каталог автомобилей';

    protected string $column = 'id';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Заголовок', 'title'),
                Text::make('Описание', 'description'),
                Text::make('Марка', 'manufacturer'),
                Text::make('Модель', 'model'),
                Number::make('Год', 'year'),
                Number::make('Цена', 'price'),
                Image::make('Картинка', 'picture'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|int',
            'price' => 'required|int',
            'picture' => 'required|image',
        ];
    }
}
