<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Laravel\Models\Comment;

/**
 * Class Post
 *
 * @property int $id
 * @property string $post
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property User $user
 * @property Collection|Comment[] $comments
 *
 * @package Laravel\Models
 */
class Post extends Model
{
	protected $table = 'posts';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'description',
		'user_id'
	];

    public $createExcept = ['id'];
    public $updateExcept = ['id','user_id'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
