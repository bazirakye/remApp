<?php

namespace App\Console\Commands;

use App\SMS\SendSms;
use Illuminate\Console\Command;

class sendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Sms reminders';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $reminder=new SendSms();
        $reminder->sendAtSix();
        $reminder->sendOneDayRemainder();
        // $this->info('Success! Check your messages.');
    }
}
