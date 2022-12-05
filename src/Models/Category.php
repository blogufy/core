<?php
namespace Blogufy\Core\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Blogufy\Core\Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }

    protected $fillable = [
        'author_id',
        'author_type',
        'name',
        'slug',
        'description',
        'status',
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
