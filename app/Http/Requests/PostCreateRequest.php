<?php


namespace App\Http\Requests;


use App\Models\User;
use Apps\Models\Post;
use Luezoid\Laravelcore\Requests\BaseRequest;
use Luezoid\Laravelcore\Services\RequestService;

class PostCreateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'post_desc'=>'required|string|max:255',
            //'user_id' => ['required',
              //  RequestService::exists(User::class)]
        ];
    }
}
