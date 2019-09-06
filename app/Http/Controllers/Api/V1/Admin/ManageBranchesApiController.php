<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManageBranchRequest;
use App\Http\Requests\UpdateManageBranchRequest;
use App\Http\Resources\Admin\ManageBranchResource;
use App\ManageBranch;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManageBranchesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('manage_branch_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ManageBranchResource(ManageBranch::with(['parent_hospital'])->get());
    }

    public function store(StoreManageBranchRequest $request)
    {
        $manageBranch = ManageBranch::create($request->all());

        return (new ManageBranchResource($manageBranch))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ManageBranch $manageBranch)
    {
        abort_if(Gate::denies('manage_branch_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ManageBranchResource($manageBranch->load(['parent_hospital']));
    }

    public function update(UpdateManageBranchRequest $request, ManageBranch $manageBranch)
    {
        $manageBranch->update($request->all());

        return (new ManageBranchResource($manageBranch))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ManageBranch $manageBranch)
    {
        abort_if(Gate::denies('manage_branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manageBranch->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
