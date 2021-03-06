<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BackstorySkill extends Model
{
    protected $table = 'backstory_skills';
    protected $guarded = [
        'id',
    ];

    use SoftDeletes;
}
