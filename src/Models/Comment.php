<?php

namespace Blogufy\Core\Models;

use Database\Factories\CommentFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return CommentFactory::new();
    }

    protected $fillable = [
        'comment',
        'status',
        'vote'
    ];

    // relationships
    public function author()
    {
        return $this->morphTo();
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }


}
