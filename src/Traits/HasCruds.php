<?php
namespace Blogufy\Core\Traits;

use Illuminate\Support\Str;
use Blogufy\Core\Models\Tag;
use Illuminate\Database\Eloquent\Model;

trait HasCruds
{
    protected $model;
    protected $relation;

    public function __construct($model)
    {
        $this->model = $model;
    }

    // set relation name
    protected function setRelation()
    {
        $relation = strtolower((new \ReflectionClass($this->model))->getShortName());
        
        return $this->relation = Str::plural($relation) . '()'; 
    }

    public function get() 
    { 
        // dd($this->relation);
        return $this->model::all();
    }

    public function new(array $details, $author) 
    { 
        return $author->{$this->relation}->create($details);
    }

}