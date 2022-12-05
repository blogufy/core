<?php
namespace Blogufy\Core\Repositories;

use Blogufy\Core\Interfaces\Crudable;
use Blogufy\Core\Models\Article;

class ArticleRepository implements Crudable
{
    public function getAll()
    {
        return Article::all();
    }

    public function getById($id)
    {
        return Article::findOrFail($id);
    }  

    public function new($details, $author)
    {
        return $author->articles()->create($details);
    }

    public function update($id, $details, $author)
    {
        $article = Article::whereId($id);
        return $article->update($details);
    }

    public function status($id, $status)
    {
        Article::whereId($id)->update(['status' => $status]);
        return true;
    }

    /** list all active records */
    public function active()
    {
        return Article::where('status', 'active')->get();
    }

    /** list all in-active records */
    public function inactive()
    {
        return Article::where('status', 'inactive')->get();
    }


    public function delete($id)
    {
        Article::destroy($id);
    }



}
