<?php


namespace App\Http\Controllers;


use App\Constants\AppConstants;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserDeleteRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use DemeterChain\B;
use Illuminate\Support\Facades\Auth;
use Luezoid\Laravelcore\Constants\ErrorConstants;
use Luezoid\Laravelcore\Exceptions\InvalidCredentialsException;
use Luezoid\Laravelcore\Http\Controllers\ApiController;
use Luezoid\Laravelcore\Jobs\BaseJob;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use App\Http\Requests\UserCreateRequest;
class UserController extends ApiController
{
    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws InvalidCredentialsException
     */

    protected $repository=UserRepository::class;

    protected $createJob=BaseJob::class;
    protected $storeJobMethod ='create';
    protected $storeRequest=UserCreateRequest::class;

    protected $updateJob=BaseJob::class;
    protected $updateJobMethod="update";
    protected $updateRequest=UserUpdateRequest::class;

    protected $deleteJob = BaseJob::class;
    protected $deleteRequest=UserDeleteRequest::class;

}
