<?php
namespace Blogufy\Core\Traits;

use Blogufy\Core\Models\Article;

trait HasArticles
{
    public function articles()
    {
        return $this->morphMany(Article::class, 'author');
    }
} 