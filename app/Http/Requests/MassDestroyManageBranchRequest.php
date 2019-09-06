<?php

namespace App\Http\Requests;

use App\ManageBranch;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyManageBranchRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('manage_branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:manage_branches,id',
        ];
    }
}
