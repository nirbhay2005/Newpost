<?php


namespace App\Http\Requests;


use Luezoid\Laravelcore\Requests\BaseRequest;

class UserDeleteRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'id'=>'required|int',
        ];
    }
}
