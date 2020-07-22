<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'stud_id';

    protected $fillable = [
        'stud_name',
        'stud_registration',
        'stud_numeric_document',
        'created_at',
        'updated_at',
    ];

    use SoftDeletes;
}
