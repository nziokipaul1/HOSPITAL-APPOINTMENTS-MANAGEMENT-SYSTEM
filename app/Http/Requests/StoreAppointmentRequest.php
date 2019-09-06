<?php

namespace App\Http\Requests;

use App\Appointment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAppointmentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('appointment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'client_id'         => [
                'required',
                'integer',
            ],
            'service_booked_id' => [
                'required',
                'integer',
            ],
            'doctor_id'         => [
                'required',
                'integer',
            ],
            'hospital_id'       => [
                'required',
                'integer',
            ],
            'date_and_time'     => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
        ];
    }
}
