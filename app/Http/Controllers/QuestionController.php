<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionUser;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function question(Question $questions, $id)
    {
        return $questions::where('id', $id)->first(['id', 'title',])->load('answers');
    }

    public function answer(Request $request, $id)
    {
        $response = new QuestionUser;
        $response->user_id = auth()->user()->id;
//        $response->question_id = $id;
        $response->answer = $request->answer;
        $response->save();

        if ($id === 20){
            auth()->user()->update([ 'go' => 1 ]);
        }
    }

    public function questions(Question $questions)
    {
        return $questions::all(['id', 'title',])->load('answers');
    }

    public function finish(Request $request, Question $questions)
    {
        if (!$request->question_0){ return response()->json([ 'R' => false ]); }
        if (!$request->question_1){ return response()->json([ 'R' => false ]); }
        if (!$request->question_2){ return response()->json([ 'R' => false ]); }

        $q0 = new QuestionUser;
        $q0->user_id = auth()->user()->id;
        $q0->answer = $request->question_0;
        $q0->save();

        $q1 = new QuestionUser;
        $q1->user_id = auth()->user()->id;
        $q1->answer = $request->question_1;
        $q1->save();

        $q2 = new QuestionUser;
        $q2->user_id = auth()->user()->id;
        $q2->answer = $request->question_2;
        $q2->save();

        $question_0 = $questions->where('answer', $request->question_0)->exists();
        if (!$question_0){ return response()->json([ 'R' => false ]); }

        $question_1 = $questions->where('answer', $request->question_1)->exists();
        if (!$question_1){ return response()->json([ 'R' => false ]); }

        $question_2 = $questions->where('answer', $request->question_2)->exists();
        if (!$question_2){  return response()->json([ 'R' => false ]); }

        auth()->user()->update([ 'go' => 1 ]);

        return response()->json([ 'R' => true ]);

    }
}
