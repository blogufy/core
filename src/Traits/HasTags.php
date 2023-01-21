<?php
namespace Blogufy\Core\Traits;

use Blogufy\Core\Models\Tag;

trait HasTags
{
    public function tags()
    {
        return $this->morphMany(Tag::class, 'author');
    }
}