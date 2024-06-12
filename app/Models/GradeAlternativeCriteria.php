<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeAlternativeCriteria extends Model
{
    use HasFactory;

    protected $table = 'grade_alternatives_criteria';

    protected $fillable = [
        'alternative_id',
        'criteria_id',
        'grade',
    ];

    public function alternative(){
        return $this->belongsTo(alternative::class);
    }

    public function criteria(){
        return $this->belongsTo(criteria::class);
    }
}
