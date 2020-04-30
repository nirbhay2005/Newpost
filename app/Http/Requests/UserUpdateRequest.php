<?php


namespace App\Http\Requests;


use Luezoid\Laravelcore\Requests\BaseRequest;

class UserUpdateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name'=>'string|max:10',
            'email' => 'email',
            'password' => 'string'
        ];
    }
}
