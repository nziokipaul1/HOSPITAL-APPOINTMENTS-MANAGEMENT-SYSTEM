<?php

namespace App\Http\Requests;

use App\Service;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreServiceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('service_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'                        => [
                'required',
                'unique:services',
            ],
            'hospitals_offerings.*'       => [
                'integer',
            ],
            'hospitals_offerings'         => [
                'array',
            ],
            'doctors_offering_services.*' => [
                'integer',
            ],
            'doctors_offering_services'   => [
                'required',
                'array',
            ],
        ];
    }
}
