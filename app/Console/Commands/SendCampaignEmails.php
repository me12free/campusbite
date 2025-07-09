<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Campaign;
use App\Models\User;
use App\Mail\CampaignMail;
use Illuminate\Support\Facades\Mail;

class SendCampaignEmails extends Command
{
    protected $signature = 'campaign:send {campaign_id}';
    protected $description = 'Send a campaign email to all opted-in users';

    public function handle()
    {
        $campaign = Campaign::findOrFail($this->argument('campaign_id'));
        $users = User::where('email_opt_in', true)->get();
        $count = 0;
        foreach ($users as $user) {
            Mail::to($user->email)->queue(new CampaignMail($campaign, $user));
            $count++;
        }
        $this->info("Campaign sent to {$count} users.");
        return 0;
    }
}
