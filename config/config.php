<?php

return [
    /**
     * Table name that represents post or articles. No need to change if 
     * you are maintaining the default here.
     */
    'articles_table' => 'articles',

    /**
     * Middleware to protect admin CRUD activities of Articles
     */
    'middleware' => [
        'web',
        'auth'
    ],

    /**
     * Route prefix. You can change the prefix to suite your application 
     * design or need.
     */
    'prefix' => 'blogufy',

    


];