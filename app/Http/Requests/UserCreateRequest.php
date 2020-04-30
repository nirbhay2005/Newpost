<?php


namespace App\Http\Requests;


use Luezoid\Laravelcore\Requests\BaseRequest;

class UserCreateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name'=>'required|string|max:20',
            'email' => 'required|email',
            'password' => 'required|string'
        ];
    }
}
