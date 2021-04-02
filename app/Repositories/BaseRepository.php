<?php
namespace App\Repositories;

abstract class BaseRepository {
    protected $model;

    public function findAll(int $limit=10){
        return $this->model
        ->limit($limit)
        ->get();
    }
}