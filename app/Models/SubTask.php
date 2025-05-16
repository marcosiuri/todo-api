<?php

namespace App\Models;

use App\Enums\Priority;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Todo
 *
 * @property int $id
 * @property int $creted_by
 * @property int|null $responsible_id
 * @property string $title
 * @property string $description
 * @property string $status
 * @property string $priority
 * @property Carbon $start_date
 * @property Carbon|null $close_date
 * @property Carbon|null $due_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @property-read \App\Models\User $creator
 * @property-read \App\Models\Todo $todo_id
 * @property-read \App\Models\User|null $responsible
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SubTask[] $subTasks
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 */
class SubTask extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'todo_id',
        'creted_by',
        'responsible_id',
        'title',
        'description',
        'status',
        'priority',
        'start_date',
        'close_date',
        'due_date',
    ];

    protected $casts = [
        'priority' => Priority::class,
        'start_date' => 'date',
        'close_date' => 'date',
        'due_date' => 'date',
    ];

    public function todo()
    {
        return $this->belongsTo(Todo::class, 'todo_id');
   
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'creted_by');
    }

    public function responsible()
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }

    public function subTasks()
    {
        return $this->hasMany(SubTask::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}