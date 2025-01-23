<?php

namespace App\Mail;

use App\Models\Loan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class LoanInviteNewUserMail extends Mailable
{
    use Queueable, SerializesModels;


    public $loan;
    public $inviteUrl;

    public function __construct(Loan $loan, string $email)
    {
        $this->loan = $loan;
        $this->inviteUrl = URL::temporarySignedRoute(
            'register.invite',
            now()->addDays(7),
            ['email' => $email, 'loan' => $loan->id]
        );
    }
    public function envelope()
    {
        return new Envelope(
            subject: 'Uitnodiging voor SnapPay en een nieuwe lening van ' . $this->loan->owner->full_name,
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.loan-invite-new-user',
        );
    }

    public function attachments()
    {
        return [];
    }
}
