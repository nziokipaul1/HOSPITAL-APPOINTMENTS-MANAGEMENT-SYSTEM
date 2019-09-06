<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageHospital extends Model
{
    use SoftDeletes;

    public $table = 'manage_hospitals';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'address',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function manageBranches()
    {
        return $this->hasMany(ManageBranch::class, 'parent_hospital_id', 'id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'hospital_id', 'id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
