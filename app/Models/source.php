<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class source extends Model
{
    use SoftDeletes;
    protected $table = 'sources';
    protected $dates = ['deleted_at'];
    public $incrementing = "false";
    protected $keyType = "string";

    protected $primaryKey = "id";

    protected $fillable = [
        'id', 
        'name', 
        'description', 
        'url', 
        'category',
        'language',
        'country'
    ];
}
