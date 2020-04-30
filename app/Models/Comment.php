<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
/**
 * Class Comment
 *
 * @property int $id
 * @property string $comment
 * @property int $post_id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Post $post
 * @property User $user
 *
 * @package Laravel\Models
 */
class Comment extends Model
{
	protected $table = 'comments';

	protected $casts = [
		'post_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'comm_desc',
		'post_id',
		'user_id'
	];

	public $createExcept = ['id'];
	public $updateExcept = ['post_id','user_id'];

	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
