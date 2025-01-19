<?php
namespace Blogufy\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Blogufy\Core\Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected static function newFactory()
    {
        return ArticleFactory::new();
    }

    protected $fillable = [
        'category_id',
        'author_id',
        'author_type',
        'title',
        'slug',
        'body',
        'description',
        'image',
        'status',
        'views',
        'click',
        'like',
        'dislike',
        'share',
    ];

    // relationships
    public function author()
    {
        return $this->morphTo();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
