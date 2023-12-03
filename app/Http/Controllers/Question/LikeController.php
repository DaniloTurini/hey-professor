<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Models\{Question, vote};
use Illuminate\Http\RedirectResponse;

class LikeController extends Controller
{
    public function __invoke(Question $question): RedirectResponse
    {
        vote::query()->create([
            'question_id' => $question->id,
            'user_id'     => auth()->id(),
            'like'        => 1,
            'unlike'      => 0,
        ]);

        return back();
    }
}
