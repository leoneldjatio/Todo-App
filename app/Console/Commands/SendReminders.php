<?php

namespace App\Console\Commands;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReminders extends Command
{
    protected $signature = 'reminders:send';

    protected $description = 'Send email reminders for upcoming tasks';

    public function handle()
    {
        $tasks = Task::whereDate('reminder_date', '=', Carbon::today())
            ->whereTime('reminder_time', '<=', Carbon::now()->addMinute())
            ->get();

        foreach ($tasks as $task) {
            $user = $task->user; // Assuming there is a relationship between Task and User models

            // Send email reminder to the user
            Mail::to($user->email)->send(new TaskReminderMail($task));

            // Update the task status or perform any other necessary actions
            $task->update(['reminder_sent' => true]);
        }
    }
}
