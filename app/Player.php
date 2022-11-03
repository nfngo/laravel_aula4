<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Player extends Model
{
    use SoftDeletes, Sortable;

    protected $fillable = [
        'name',
        'address',
        'description',
        'retired'
    ];

    public $sortable = [
        'id',
        'name',
        'address',
        'retired'
    ];
}
