<?php

namespace App\Console\Commands;

use App\Http\Controllers\WordGeneratorController;
use App\Models\Word;
use Illuminate\Console\Command;

class GenerateWordsCommand extends Command
{
    protected $signature = 'generate:words';

    protected $description = 'Generate words';

    public function handle()
    {
        $word = new Word();
        $word->generateWords();
    }
}
