<?php

namespace App\Http\Requests;

use App\ManageHospital;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateManageHospitalRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('manage_hospital_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'    => [
                'required',
                'unique:manage_hospitals,name,' . request()->route('manage_hospital')->id,
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
