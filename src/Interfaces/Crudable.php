<?php
namespace Blogufy\Core\Interfaces;

/**
 * Able to perform CRUD activities
 */
interface Crudable
{
    public function getAll();

    public function getById($id);

    
    public function new(array $details, $author);
    
    public function update($id, array $details, $author);
    
    public function status($id, string $status);
    
    public function delete($id);
}
