<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Model;

class BaseService
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->index();
    }

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function store(array $data)
    {
        return $this->model->store($data);
    }

    public function update(array $data,int $id)
    {
        $record = $this->find($id);
        $record->update($data);
        return $record;
    }

    public function destroy(int $id)
    {
        $record = $this->find($id);
        $record->delete();
        return true;
    }
}
