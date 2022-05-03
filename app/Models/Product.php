<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */
class Product extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;
    protected $guarded = [];

}
