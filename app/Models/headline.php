<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class headline extends Model
{
    use SoftDeletes;
    protected $table = 'headlines';
    protected $dates = ['deleted_at'];
    public $incrementing = "false";
    
    protected $appends = ['source'];

    protected $primaryKey = "id";

    protected $fillable = [
        'id', 
        'name', 
        'author',
        'title',
        'description', 
        'url', 
        'urlToImage',
        'publishedAt',
        'content',
    ];

    protected $casts = [
        //'publishedat' => 'datetime',
    ];

    public function getSourceAttribute(){
        return "source";
    }

    public function setDateAttribute( $value ) {
        $this->attributes['publishedat'] = (new Carbon($value))->format('d/m/y');
    }
}
