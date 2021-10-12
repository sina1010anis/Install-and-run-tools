<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Database\Factories\MessageFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index(){
        return view('chat.index');
    }
    public function userView(){
        return response()->json(User::all());
    }
    public function messageView(Request $request){
        $message_you = Message::query()->
            where('from' , $request->id)
            ->orWhere('from' , auth()->user()->id)
            ->orderBY('id' , 'DESC');
        //$message_my = Message::where(['to' => $request->id , 'from' => auth()->user()->id])->orderBY('id' , 'DESC')->get();
        return response()->json($message_you->where('to' , $request->id)->orWhere('to' , auth()->user()->id)->get());
    }
}
