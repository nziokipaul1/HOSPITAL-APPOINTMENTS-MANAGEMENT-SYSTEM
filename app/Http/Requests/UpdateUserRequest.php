<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'         => [
                'required',
            ],
            'phone_number' => [
                'min:7',
                'max:15',
                'required',
                'unique:users,phone_number,' . request()->route('user')->id,
            ],
            'email'        => [
                'required',
            ],
            'roles.*'      => [
                'integer',
            ],
            'roles'        => [
                'array',
            ],
        ];
    }
}
