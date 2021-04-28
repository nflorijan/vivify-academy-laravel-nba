<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Comment;
use App\Models\Team;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $team;
    private $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Team $team, Comment $comment)
    {
        $this->team = $team;
        $this->comment = $comment;
        $this->user = auth()->user();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Comment email')
                    ->with([
                        'user' => $this->user,
                        'comment' => $this->comment,
                        'team' => $this->team
                    ])->view('emails.comments-received');
    }
}
