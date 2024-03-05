<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LessonFaq extends Model
{
    //
    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');

    }
}
