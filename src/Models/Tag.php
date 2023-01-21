<?php

namespace Blogufy\Core\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Blogufy\Core\Database\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected static function newFactory()
    {
        return TagFactory::new();
    }

    protected $fillable = [
        'author_id',
        'author_type',
        'name',
        'slug',
        'description',
    ];

    // relationships
    public function author()
    {
        return $this->morphTo();
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
