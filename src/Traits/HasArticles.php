<?php
namespace PySosu\Blogufy\Traits;

use PySosu\Blogufy\Models\Article;

trait HasArticles
{
    public function articles()
    {
        return $this->morphMany(Article::class, 'author');
    }
} 