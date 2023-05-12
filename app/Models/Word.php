<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Word extends Model
{
    use HasFactory;
    protected $fillable = [
        'word'
    ];

    public function getLetterCounts()
    {
        $counts = array_count_values(str_split(strtolower($this->word)));
        ksort($counts);

        return implode(', ', $counts);
    }
}
