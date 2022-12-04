<?php
namespace PySosu\Blogufy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \PySosu\Blogufy\Database\Factories\ArticleFactory::new();
    }

    protected $fillable = [
        'title',
        'slug',
    ];

    // relationships
    public function author()
    {
        return $this->morphTo();
    }
}
