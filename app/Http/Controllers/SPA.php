<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class SPA extends Controller
{
    public function __invoke(Request $request)
    {
        $dayFinish = Participant::where('user_id', auth()->user()->id)->whereDate('created_at', date('Y-m-d'))->count();
        if($dayFinish == 1){
            auth()->logout();
            return  view('dayFinish');
        };
        return view('welcome');
    }
}
