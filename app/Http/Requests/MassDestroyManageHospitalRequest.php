<?php

namespace App\Http\Requests;

use App\ManageHospital;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyManageHospitalRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('manage_hospital_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:manage_hospitals,id',
        ];
    }
}
