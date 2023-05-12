<?php

namespace App\Console;

use App\Models\Word;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $letters = 'abcdefghijklmnopqrstuvwxyz';
            for ($j = 0; $j < 10; $j++) {
                $word = '';
                for ($i = 0; $i < 10; $i++) {
                    $letter = $letters[rand(0, 25)];
                    $word .= $i % 2 === 0 ? strtoupper($letter) : strtolower($letter);
                }
                Word::create(['word' => $word]);
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
