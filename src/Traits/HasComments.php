<?php
namespace Blogufy\Core\Traits;

use Blogufy\Core\Models\Comment;

trait HasComments
{
    public function comments()
    {
        return $this->moprhMany(Comment::class, 'author');
    }
}