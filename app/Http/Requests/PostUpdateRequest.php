<?php


namespace App\Http\Requests;


use App\Models\User;
use Luezoid\Laravelcore\Requests\BaseRequest;
use Luezoid\Laravelcore\Services\RequestService;

class PostUpdateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'description'=>'string|max:255',
            'user_id' => [RequestService::exists(User::class)]
        ];
    }
}
