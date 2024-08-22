<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Znck\Eloquent\Traits\BelongsToThrough as BelongsToThroughTrait;
use Znck\Eloquent\Relations\BelongsToThrough;

class Product extends Model
{
    use BelongsToThroughTrait;
    protected $fillable = ['name', 'price', 'assortment_id'];

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
}
