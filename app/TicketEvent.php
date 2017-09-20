<?php

namespace App;

class TicketEvent extends BaseModel
{
    public static function make($ticket, $description){
        $ticket->events()->create([
            "user_id" => auth()->user()->id ?? null,
            "body" => $description
        ]);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function author(){
        return $this->user;
    }
}
