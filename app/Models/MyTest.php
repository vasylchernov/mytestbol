<?php

namespace App\Models;

use App\Enums\MyTestType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyTest extends Model
{
    use HasFactory;

    protected $fillable = ['example'];

    protected $casts = ['type' => MyTestType::class];
}
