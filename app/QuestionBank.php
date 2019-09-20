<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    protected $table = 'question_bank';
    protected $fillable = ['type','question','answer','difficulty_level'];
}
