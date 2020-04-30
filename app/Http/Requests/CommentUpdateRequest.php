<?php


namespace App\Http\Requests;


use App\Models\Post;
use App\Models\User;
use Luezoid\Laravelcore\Requests\BaseRequest;
use Luezoid\Laravelcore\Services\RequestService;

class CommentUpdateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'comm_desc'=>'string|max:30',
            'user_id' => [RequestService::exists(User::class)],
            'post_id' => [RequestService::exists(Post::class)]
        ];
    }
}
