<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyManageBranchRequest;
use App\Http\Requests\StoreManageBranchRequest;
use App\Http\Requests\UpdateManageBranchRequest;
use App\ManageBranch;
use App\ManageHospital;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ManageBranchesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = ManageBranch::with(['parent_hospital'])->select(sprintf('%s.*', (new ManageBranch)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'manage_branch_show';
                $editGate      = 'manage_branch_edit';
                $deleteGate    = 'manage_branch_delete';
                $crudRoutePart = 'manage-branches';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('branch_address', function ($row) {
                return $row->branch_address ? $row->branch_address : "";
            });
            $table->editColumn('branch_email', function ($row) {
                return $row->branch_email ? $row->branch_email : "";
            });
            $table->addColumn('parent_hospital_name', function ($row) {
                return $row->parent_hospital ? $row->parent_hospital->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'parent_hospital']);

            return $table->make(true);
        }

        return view('admin.manageBranches.index');
    }

    public function create()
    {
        abort_if(Gate::denies('manage_branch_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parent_hospitals = ManageHospital::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.manageBranches.create', compact('parent_hospitals'));
    }

    public function store(StoreManageBranchRequest $request)
    {
        $manageBranch = ManageBranch::create($request->all());

        return redirect()->route('admin.manage-branches.index');
    }

    public function edit(ManageBranch $manageBranch)
    {
        abort_if(Gate::denies('manage_branch_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parent_hospitals = ManageHospital::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $manageBranch->load('parent_hospital');

        return view('admin.manageBranches.edit', compact('parent_hospitals', 'manageBranch'));
    }

    public function update(UpdateManageBranchRequest $request, ManageBranch $manageBranch)
    {
        $manageBranch->update($request->all());

        return redirect()->route('admin.manage-branches.index');
    }

    public function show(ManageBranch $manageBranch)
    {
        abort_if(Gate::denies('manage_branch_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manageBranch->load('parent_hospital');

        return view('admin.manageBranches.show', compact('manageBranch'));
    }

    public function destroy(ManageBranch $manageBranch)
    {
        abort_if(Gate::denies('manage_branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $manageBranch->delete();

        return back();
    }

    public function massDestroy(MassDestroyManageBranchRequest $request)
    {
        ManageBranch::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
