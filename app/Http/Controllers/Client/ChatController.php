<?php

namespace App\Http\Controllers\Client;

use App\Entities\Chat;
use App\Entities\ChatParticipant;
use App\Entities\Message;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chats = Chat::whereHas('participants', function($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();

        return view('client.chats-list', [
            'chats' => $chats
        ]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id = null)
    {
        $chatId = request('id', $id);
        $messages = Message::where('chat_id', $chatId)->get();

        return view('client.chat', [
            'messages' => $messages,
            'chatId' => $chatId
        ]);
    }

    public function sendMessage()
    {
        $message = new Message();
        $message->chat_id = request('chat_id');
        $message->user_id = auth()->user()->id;
        $message->message = request('message', '');
        $message->latitude = request('latitude', 0);
        $message->longitude = request('longitude', 0);
        $message->save();

        return redirect()->route('chats.view' , ['id' => request('chat_id')]);
    }
}
