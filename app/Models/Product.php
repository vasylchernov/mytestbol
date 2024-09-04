<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Znck\Eloquent\Traits\BelongsToThrough as BelongsToThroughTrait;
use Znck\Eloquent\Relations\BelongsToThrough;

class Product extends Model
{
    use BelongsToThroughTrait;
    protected $fillable = ['name', 'price', 'assortment_id'];

    public function scopeWithCheapestProduct(): Collection
    {
//        return $query->with(['products' => function ($query) {
//            $query->orderBy('price', 'ASC');
//        }]);
        $data = Product::all();
        return ($data->count() > 0) ? $data->map(fn ($item) => $item->name) : collect('empty product table');
    }

    public function scopeWithCheapestProductSql(Builder $query): Builder
    {
        return $query->select('name', 'price')->orderBy('price', 'ASC')->limit(2);
    }

    public function category(): BelongsToThrough {
        return $this->belongsToThrough(Category::class, Assortment::class);
    }

    public function assortment(): BelongsTo {
        return $this->belongsTo(Assortment::class);
    }

    public function test(): string
    {
        return '_test_';
    }

    public function test2(): string
    {
        return '_test2_';
    }

    public function getAllNames(): Collection
    {
        return $this::all()->map(fn ($item) => $item->name);
    }

    public function getProductName(int $id): Collection
    {
        $data = Product::all()->filter(fn ($it) => $it->id == $id);
        return ($data->count() > 0) ? $data->map(fn ($item) => $item->name) : collect('incorrect_id');
    }
}
