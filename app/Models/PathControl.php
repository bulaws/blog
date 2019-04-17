<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PathControl extends Model
{
    protected $table = 'pathcontrol';

    protected $fillable = [
        'id',
        'path',
        'module',
        'tmp',
        'routename',
        'target',
        'sitemap',
        'indexing',
        'keyindex'
    ];

    public static function findBySlag($slug)
    {
        return static::where('path', $slug)->first();
    }
}
