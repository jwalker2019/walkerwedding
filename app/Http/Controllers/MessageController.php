<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Resources\Message as MessageResource;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return MessageResource::collection($messages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = $request->isMethod('put') ? Message::findOrFail
        ($request->message_id) : new Message;

        $message->id = $request->input('message_id');
        $message->message = $request->input('message');
        $message->from = $request->input('from');

        if($message->save()) {
            return new MessageResource($message);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    /*
    public function show(Message $message)
    {
      $message = Message::findOrFail($id);

      return new MessageResource($message);
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */

     /*
    public function putMessage(Request $request, $id)
    {
        $message = Message::find($id);
        if (!$message) {
            return response()->json(['message' => 'Document not found'], 404);
        }
        $message->message = $request->input('message');
        $message->from = $request->input('from');
        $message->save();
        return response()->json(['message' => $message], 200);

    }
*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    /*
    public function destory($id)
    {
        $message = Message::findOrFail($id);

        if($message->delete()) {
            return new MessageResource($message);
        }
    }*/
}
