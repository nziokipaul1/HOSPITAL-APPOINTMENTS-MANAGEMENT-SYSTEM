<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAppointmentRequest;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\ManageBranch;
use App\ManageHospital;
use App\Service;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AppointmentsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Appointment::with(['client', 'service_booked', 'doctor', 'hospital', 'branch'])->select(sprintf('%s.*', (new Appointment)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'appointment_show';
                $editGate      = 'appointment_edit';
                $deleteGate    = 'appointment_delete';
                $crudRoutePart = 'appointments';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->addColumn('client_name', function ($row) {
                return $row->client ? $row->client->name : '';
            });

            $table->editColumn('client.email', function ($row) {
                return $row->client ? (is_string($row->client) ? $row->client : $row->client->email) : '';
            });
            $table->addColumn('service_booked_name', function ($row) {
                return $row->service_booked ? $row->service_booked->name : '';
            });

            $table->addColumn('doctor_name', function ($row) {
                return $row->doctor ? $row->doctor->name : '';
            });

            $table->addColumn('hospital_name', function ($row) {
                return $row->hospital ? $row->hospital->name : '';
            });

            $table->editColumn('hospital.address', function ($row) {
                return $row->hospital ? (is_string($row->hospital) ? $row->hospital : $row->hospital->address) : '';
            });

            $table->addColumn('branch_name', function ($row) {
                return $row->branch ? $row->branch->name : '';
            });

            $table->editColumn('branch.branch_address', function ($row) {
                return $row->branch ? (is_string($row->branch) ? $row->branch : $row->branch->branch_address) : '';
            });
            $table->editColumn('is_completed', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_completed ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'client', 'service_booked', 'doctor', 'hospital', 'branch', 'is_completed']);

            return $table->make(true);
        }

        return view('admin.appointments.index');
    }

    public function create()
    {
        abort_if(Gate::denies('appointment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $service_bookeds = Service::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $doctors = Employee::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $hospitals = ManageHospital::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $branches = ManageBranch::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.appointments.create', compact('clients', 'service_bookeds', 'doctors', 'hospitals', 'branches'));
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->all());

        return redirect()->route('admin.appointments.index');
    }

    public function edit(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $service_bookeds = Service::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $doctors = Employee::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $hospitals = ManageHospital::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $branches = ManageBranch::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $appointment->load('client', 'service_booked', 'doctor', 'hospital', 'branch');

        return view('admin.appointments.edit', compact('clients', 'service_bookeds', 'doctors', 'hospitals', 'branches', 'appointment'));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->all());

        return redirect()->route('admin.appointments.index');
    }

    public function show(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->load('client', 'service_booked', 'doctor', 'hospital', 'branch');

        return view('admin.appointments.show', compact('appointment'));
    }

    public function destroy(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->delete();

        return back();
    }

    public function massDestroy(MassDestroyAppointmentRequest $request)
    {
        Appointment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
