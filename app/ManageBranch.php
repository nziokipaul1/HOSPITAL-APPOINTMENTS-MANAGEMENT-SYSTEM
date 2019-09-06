<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageBranch extends Model
{
    use SoftDeletes;

    public $table = 'manage_branches';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
        'branch_email',
        'branch_address',
        'parent_hospital_id',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'branch_id', 'id');
    }

    public function parent_hospital()
    {
        return $this->belongsTo(ManageHospital::class, 'parent_hospital_id');
    }
}
