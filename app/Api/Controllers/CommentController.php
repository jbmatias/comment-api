<?php

namespace App\Api\Controllers;

use App\Api\Requests\CommentRequest;
use App\Api\Services\ICommentService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    protected $commentService;

    public function __construct(ICommentService $commentService)
    {
        $this->commentService = $commentService;    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->commentService->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $comment = $this->commentService->create(collect($request->data())->toArray());
        $comment['responses'] = [];
        return response()->json($comment, 200);
    }
    
}
