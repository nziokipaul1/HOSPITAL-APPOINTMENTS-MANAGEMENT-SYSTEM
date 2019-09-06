<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManageHospitalRequest;
use App\Http\Requests\UpdateManageHospitalRequest;
use App\Http\Resources\Admin\ManageHospitalResource;
use App\ManageHospital;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManageHospitalsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('manage_hospital_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ManageHospitalResource(ManageHospital::all());
    }

    public function store(StoreManageHospitalRequest $request)
    {
        $manageHospital = ManageHospital::create($request->all());

        return (new ManageHospitalResource($manageHospital))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ManageHospital $manageHospital)
    {
        abort_if(Gate::denies('manage_hospital_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ManageHospitalResource($manageHospital);
    }

    public function update(UpdateManageHospitalRequest $request, ManageHospital $manageHospital)
    {
        $manageHospital->update($request->all());

        return (new ManageHospitalResource($manageHospital))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ManageHospital $manageHospital)
    {
        abort_if(Gate::denies('manage_hospital_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manageHospital->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
