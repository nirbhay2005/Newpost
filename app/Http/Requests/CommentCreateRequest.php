<?php


namespace App\Http\Requests;


use App\Models\Post;
use App\Models\User;
use Luezoid\Laravelcore\Requests\BaseRequest;
use Luezoid\Laravelcore\Services\RequestService;

class CommentCreateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'comm_desc'=>'required|string|max:30',
            'post_id' => ['required',
                RequestService::exists(Post::class)],
           // 'user_id' => ['required',
             //   RequestService::exists(User::class)]
        ];
    }
}
