<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrEmployee extends Model
{
    protected $table = 'hr_employee'; 
    use HasFactory;

    public function position()
    {
        return $this->belongsTo(HrPosition::class, 'position_id');
    }

}
