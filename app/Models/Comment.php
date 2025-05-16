<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Todo
 *
 * @property int $id
 * @property int $creted_by
 * @property int $todo_id
 * @property int|null $sub_task_id
 * @property string $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @property-read \App\Models\User $creator
 * @property-read \App\Models\Todo $todo_id
 * @property-read \App\Models\SubTask|null $sub_task_id
 */

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'todo_id',
        'sub_task_id',
        'creted_by',
        'comment',
    ];

    public function todo()
    {
        return $this->belongsTo(Todo::class, 'todo_id');
    }

    public function subTask()
    {
        return $this->belongsTo(SubTask::class, 'sub_task_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}