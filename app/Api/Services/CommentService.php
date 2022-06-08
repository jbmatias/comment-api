<?php

namespace App\Api\Services;

use App\Api\Repositories\Contracts\ICommentRepository;

class CommentService implements ICommentService {


  protected $commentRepository;

  public function __construct(ICommentRepository $commentRepository)
  {
      $this->commentRepository = $commentRepository;    
  }
    

}
