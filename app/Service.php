<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'cost',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'service_booked_id', 'id');
    }

    public function hospitals_offerings()
    {
        return $this->belongsToMany(ManageHospital::class);
    }

    public function doctors_offering_services()
    {
        return $this->belongsToMany(Employee::class);
    }
}
