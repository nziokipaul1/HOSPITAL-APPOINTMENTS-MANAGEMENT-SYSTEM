<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyManageHospitalRequest;
use App\Http\Requests\StoreManageHospitalRequest;
use App\Http\Requests\UpdateManageHospitalRequest;
use App\ManageHospital;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManageHospitalsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('manage_hospital_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manageHospitals = ManageHospital::all();

        return view('admin.manageHospitals.index', compact('manageHospitals'));
    }

    public function create()
    {
        abort_if(Gate::denies('manage_hospital_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.manageHospitals.create');
    }

    public function store(StoreManageHospitalRequest $request)
    {
        $manageHospital = ManageHospital::create($request->all());

        return redirect()->route('admin.manage-hospitals.index');
    }

    public function edit(ManageHospital $manageHospital)
    {
        abort_if(Gate::denies('manage_hospital_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.manageHospitals.edit', compact('manageHospital'));
    }

    public function update(UpdateManageHospitalRequest $request, ManageHospital $manageHospital)
    {
        $manageHospital->update($request->all());

        return redirect()->route('admin.manage-hospitals.index');
    }

    public function show(ManageHospital $manageHospital)
    {
        abort_if(Gate::denies('manage_hospital_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.manageHospitals.show', compact('manageHospital'));
    }

    public function destroy(ManageHospital $manageHospital)
    {
        abort_if(Gate::denies('manage_hospital_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manageHospital->delete();

        return back();
    }

    public function massDestroy(MassDestroyManageHospitalRequest $request)
    {
        ManageHospital::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
