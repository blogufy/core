<?php
namespace Blogufy\Core\Traits;

use Blogufy\Core\Models\Category;

trait HasCategories
{
    public function categories()
    {
        return $this->morphMany(Category::class, 'author');
    }
}