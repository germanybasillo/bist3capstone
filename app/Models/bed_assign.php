<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bed_assign extends Model
{
    use HasFactory;
                  /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tname',
        'room_no',
        'bed_no',
        'date_start',
        'due_date',
    ];
}
