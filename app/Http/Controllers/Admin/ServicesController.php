<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyServiceRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\ManageHospital;
use App\Service;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServicesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hospitals_offerings = ManageHospital::all()->pluck('name', 'id');

        $doctors_offering_services = Employee::all()->pluck('name', 'id');

        return view('admin.services.create', compact('hospitals_offerings', 'doctors_offering_services'));
    }

    public function store(StoreServiceRequest $request)
    {
        $service = Service::create($request->all());
        $service->hospitals_offerings()->sync($request->input('hospitals_offerings', []));
        $service->doctors_offering_services()->sync($request->input('doctors_offering_services', []));

        return redirect()->route('admin.services.index');
    }

    public function edit(Service $service)
    {
        abort_if(Gate::denies('service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hospitals_offerings = ManageHospital::all()->pluck('name', 'id');

        $doctors_offering_services = Employee::all()->pluck('name', 'id');

        $service->load('hospitals_offerings', 'doctors_offering_services');

        return view('admin.services.edit', compact('hospitals_offerings', 'doctors_offering_services', 'service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update($request->all());
        $service->hospitals_offerings()->sync($request->input('hospitals_offerings', []));
        $service->doctors_offering_services()->sync($request->input('doctors_offering_services', []));

        return redirect()->route('admin.services.index');
    }

    public function show(Service $service)
    {
        abort_if(Gate::denies('service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service->load('hospitals_offerings', 'doctors_offering_services');

        return view('admin.services.show', compact('service'));
    }

    public function destroy(Service $service)
    {
        abort_if(Gate::denies('service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service->delete();

        return back();
    }

    public function massDestroy(MassDestroyServiceRequest $request)
    {
        Service::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
