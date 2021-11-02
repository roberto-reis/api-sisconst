<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function getAll() : Collection
    {
        return $this->model->get();
    }

    public function paginate($perPage = null) : Collection
    {
        return $this->model->paginate($perPage);
    }

    public function create(array $data) : Model
    {
        return $this->model->create($data);
    }

    public function find(int $id) : Model
    {
        return $this->model->find($id);
    }

    public function update(array $data, int $id) : Model
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy(int $id) : Model
    {
        return $this->model->find($id)->delete();
    }

}
