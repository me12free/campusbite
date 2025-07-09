<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Campaign;
use App\Models\User;

class CampaignMail extends Mailable
{
    use Queueable, SerializesModels;

    public $campaign;
    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct(Campaign $campaign, User $user)
    {
        $this->campaign = $campaign;
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Campaign Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.campaign',
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

    public function build()
    {
        return $this->subject($this->campaign->subject)
            ->markdown('emails.campaign', [
                'campaign' => $this->campaign,
                'user' => $this->user,
            ]);
    }
}
