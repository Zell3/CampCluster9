<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OTPmail extends Mailable
{
    use Queueable, SerializesModels;

    // Declare public properties directly in the class body
    public $get_user_email;
    public $validToken;
    public $get_user_name;

    /**
     * Create a new message instance.
     *
     * @param string $userEmail
     * @param string $token
     * @param string $userName
     */
    public function __construct($useremail, $validToken, $username)
    {
        $this->get_user_email = $useremail;
        $this->validToken = $validToken;
        $this->get_user_name = $username;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'OTPmail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.OTPMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
