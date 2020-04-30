<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Http\Controllers\AuthenticationController;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Post;
use App\Models\Comment;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Collection|Comment[] $comments
 * @property Collection|Post[] $posts
 *
 * @package Laravel\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public $createExcept = ['id'];
	public $updateExcept = ['id'];
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}
}
