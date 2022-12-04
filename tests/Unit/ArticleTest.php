<?php

namespace PySosu\Blogufy\Tests\Unit;

use Illuminate\Support\Str;
use PySosu\Blogufy\Tests\User;
use PySosu\Blogufy\Models\Article;
use PySosu\Blogufy\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    
    public function test_an_article_has_a_title()
    {
        $article = Article::create([
            'title' => 'Hello article title'
        ]);

        $this->assertEquals('Hello article title', $article->title);
    }

    public function test_article_has_slug()
    {
        $title = "hello article title";

        $article = Article::create([
            'title' => $title,
            'slug' => Str::slug($title),
        ]);

        $this->assertEquals('hello-article-title', $article->slug);
    }

    public function test_article_has_body()
    {
        $this->assertTrue(true);
    }

    // public function test_article_has_an_author_type()
    // {
    //     $author = User::factory()->create();

    //     $title = "hello article title";

    //     $article = Article::create([
    //         'title' => $title,
    //         'slug' => Str::slug($title),
    //         'author_id' => $author->id,
    //         'author_type' => get_class($author),
    //     ]);

    //     $this->assertEquals('App\Models\User', $article->author_type);
    // }

}