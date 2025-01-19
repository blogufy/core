<?php
namespace Blogufy\Core\Services\Articles;

use Blogufy\Core\Models\Article;
use Blogufy\Crud\Interfaces\Crudable;

class ArticleCrudService implements Crudable
{

    public function make(?int $id, array $data) 
    { 
        return Article::query()
        ->updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'category_id' => $data['categoryId'],
                'author_id' => $data['authorId'],
                'author_type' => $data['authorType'],
                'title' => $data['title'],
                'slug' => str($data['title'])->slug(),
                'body' => $data['body'],
                'image' => $data['image']
            ]
        );
    }

    public function one(int|string $id) 
    { 
        return Article::query()
        ->where('id', $id)
        ->orWhere('slug', $id)
        ->first();
    }

    public function list(int|string $limit = 10, array $cols = ['*']) 
    { 
        return Article::query()
        ->get(columns: $cols);
    }

    public function paginate(int|string $limit = 10, array $cols = ['*']) 
    { 
        return Article::query()
        ->paginate(perPage: $limit, columns: $cols);
    }

    public function remove(int|string $id) { }

    
}