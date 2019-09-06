<?php

namespace App\Http\Requests;

use App\ManageBranch;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateManageBranchRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('manage_branch_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'               => [
                'required',
            ],
            'branch_address'     => [
                'required',
            ],
            'branch_email'       => [
                'required',
            ],
            'parent_hospital_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
