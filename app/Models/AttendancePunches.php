<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendancePunches extends Model
{
    use HasFactory;
    protected $table = 'att_punches'; 

    public function employee()
    {
        return $this->belongsTo(HrEmployee::class, 'employee_id');
    }
}

