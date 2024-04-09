<?php
namespace App\Mail;

use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;


class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $otp)
    {
        $this->email = $email;
        $this->otp = $otp !== null ? $otp : $this->generateRandomNumber();
        $this->saveOTPToDatabase();
    }

    /**
     * Generate a random 6-digit number.
     *
     * @return string
     */
    private function generateRandomNumber()
    {
        $random_number = '';
        for ($i = 0; $i < 6; $i++) {
            $random_number .= rand(0, 9);
        }
        return $random_number;
    }

    /**
     * Save OTP to the database.
     *
     * @return void
     */
    public function saveOTPToDatabase()
    {
        Carbon::setLocale('th');
        
        $emailModel = new Email();
        $emailModel->email_name = $this->email;
        $emailModel->email_otp = $this->otp;
        $emailModel->email_create_at = Carbon::now('Asia/Bangkok');
        $emailModel->save();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.demoMail')
            ->subject('Mail')
            ->with(['otp' => $this->otp]);
    }
}
