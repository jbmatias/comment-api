<?php

namespace App\Api\Repositories;

use App\Api\Models\Comment;
use App\Api\Repositories\Contracts\ICommentRepository;
use Illuminate\Database\Eloquent\Model;

class CommentRepository extends BaseRepository implements ICommentRepository {

    public $model;

    public function __construct(Comment $model)
    {
        $this->model = $model;
    }

    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function where($column, $value, $operator = '=')
    {
        return $this->model->where($column, $operator, $value);
    }
}
