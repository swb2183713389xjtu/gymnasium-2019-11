<?php

namespace App\Policies;

use App\Models\Topic;
use App\Models\User;

class TopicPolicy extends Policy
{
    public function update(User $user, Topic $topic)
    {
        return $user->id === $topic->user_id;
    }

    public function delete(User $user, Topic $topic)
    {
        return $user->id === $topic->user_id;
    }
}
