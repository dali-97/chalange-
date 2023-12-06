<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Plat;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone_num' => 'required',
            'message' => 'required'
        ]);

        $feed = new Feedback($request->all());
        $feed->save();

        return redirect()->back()->with([
            'message' => 'We received your feedback, thanks'
        ]);
        
    }
}
