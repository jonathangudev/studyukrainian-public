<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class FlashcardStudyRecord extends Model
{
    use HasFactory;

    protected $fillable = ['flashcard_id', 'user_id'];

    /**
     * Get the flashcard associated with the record.
     */
    public function flashcard(): BelongsTo
    {
        return $this->belongsTo(Flashcard::class);
    }
}
