<?php

namespace App\Api\Services;

use App\Api\Repositories\Contracts\ICommentRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CommentService implements ICommentService {


  protected $commentRepository;

  public function __construct(ICommentRepository $commentRepository)
  {
      $this->commentRepository = $commentRepository;    
  }
    
  public function create(array $payload): ?Model
  {
    return $this->commentRepository->create($payload);
  }

  public function all(array $columns = ['*'], array $relations = []): Collection
  {
    return $this->commentRepository->whereNull('replied_comment_id')->with('responses')->get($columns);
  }
}
