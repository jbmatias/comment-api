<?php

namespace App\Api\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

class CommentDto extends DataTransferObject {
    public ?int $replied_comment_id;
    public string $name;
    public string $comment;
}