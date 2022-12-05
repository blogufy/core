<?php

return [
    /**
     * Table name that represents post or articles. No need to change if 
     * you are maintaining the default here.
     */
    'articles_table' => 'articles',

    /**
     * Table/ Model IDs
     * Determine if your auto-incrementing ID should be the standard numeric
     * or UUID.  
     */
    'id_support' => [
        'articles' => 'id' // To use UUID change id to uuid
    ],

    /**
     * Middleware to protect admin CRUD activities of Articles
     */
    'middleware' => [
        'web',
        'auth'
    ],

    /**
     * Determine softDelete function. Use this determine if the
     * article or post model should allow soft deleting as provided by laravel
     */
    'softdelete' => true,

    /**
     * Route prefix. You can change the prefix to suite your application 
     * design or need.
     */
    'prefix' => 'blogufy',

    


];