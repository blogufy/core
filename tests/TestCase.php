<?php
namespace Blogufy\Core\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Blogufy\Core\BlogufyCoreServiceProvider;

class TestCase extends TestbenchTestCase
{
    // public function getEnvironmentSetUp($app)
    // {
    //     include_once __DIR__ . '/../database/migrations/2022_12_01_115608_create_articles_table.php';

    //     (new \CreateArticlesTable)->up();
    // }

    public function setUp(): void
    {
        parent::setUp();

    }

    

    public function getPackageProviders($app)
    {
        return [
            BlogufyCoreServiceProvider::class,
        ];
    }

    
}