<?php

namespace App\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Api\DTOs\CommentDto;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'replied_comment_id' => 'exists:comments,id',
            'name' => 'required|string',
            'comment' => 'required|string'
        ];
    }

    /**
     * Comment Data Transfer Object
     * @return CommentDto
     */
    public function data()
    {
        return new CommentDto([
            'replied_comment_id' => $this->replied_comment_id,
            'name' => $this->name,
            'comment' => $this->comment
        ]);
    }

    /**
     * Throw validation error
     * 
     * @return HttpResponseException
     */

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
