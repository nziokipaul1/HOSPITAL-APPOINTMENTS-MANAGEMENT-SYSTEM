<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'appointments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_and_time',
        'rescheduled_to',
    ];

    protected $fillable = [
        'client_id',
        'doctor_id',
        'branch_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'hospital_id',
        'is_completed',
        'date_and_time',
        'rescheduled_to',
        'service_booked_id',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function service_booked()
    {
        return $this->belongsTo(Service::class, 'service_booked_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Employee::class, 'doctor_id');
    }

    public function hospital()
    {
        return $this->belongsTo(ManageHospital::class, 'hospital_id');
    }

    public function getDateAndTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setDateAndTimeAttribute($value)
    {
        $this->attributes['date_and_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function branch()
    {
        return $this->belongsTo(ManageBranch::class, 'branch_id');
    }

    public function getRescheduledToAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setRescheduledToAttribute($value)
    {
        $this->attributes['rescheduled_to'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
