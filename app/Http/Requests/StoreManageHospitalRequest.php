<?php

namespace App\Http\Requests;

use App\ManageHospital;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreManageHospitalRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('manage_hospital_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'    => [
                'required',
                'unique:manage_hospitals',
            ],
            'address' => [
                'required',
            ],
            'email'   => [
                'required',
            ],
        ];
    }
}
