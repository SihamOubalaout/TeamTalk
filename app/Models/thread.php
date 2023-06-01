<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject',
    ];

    /**
     * Get the messages in the thread.
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Get the participants in the thread.
     */
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    /**
     * Mark the thread as read by the given user.
     *
     * @param int $userId
     * @return void
     */
    public function markAsRead($userId)
    {
        Participant::where('thread_id', $this->id)
            ->where('user_id', $userId)
            ->update(['last_read' => now()]);
    }

    /**
     * Get the latest message in the thread.
     */
    public function latestMessage()
    {
        return $this->hasOne(Message::class)->latest();
    }
}
