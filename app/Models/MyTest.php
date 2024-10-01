<?php

namespace App\Models;

use App\Enums\MyEnumType;
use App\Observers\MyTestIDChangerObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(MyTestIDChangerObserver::class)]
class MyTest extends Model
{
    use HasFactory;

    public const TABLE = 'my_tests';

    protected $fillable = ['example'];

    protected $casts = ['type' => MyEnumType::class];
}
