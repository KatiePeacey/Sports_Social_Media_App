<?php
namespace App\Mail;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CommentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $post;
    public $comment;

    public function __construct(Post $post, Comment $comment)
    {
        $this->post = $post;
        $this->comment = $comment;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New comment on your post',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.comment-notification',
            with: [
                'post' => $this->post,
                'comment' => $this->comment,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

