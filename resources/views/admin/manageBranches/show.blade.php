@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.manageBranch.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.manageBranch.fields.id') }}
                        </th>
                        <td>
                            {{ $manageBranch->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.manageBranch.fields.name') }}
                        </th>
                        <td>
                            {{ $manageBranch->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.manageBranch.fields.branch_address') }}
                        </th>
                        <td>
                            {{ $manageBranch->branch_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.manageBranch.fields.branch_email') }}
                        </th>
                        <td>
                            {{ $manageBranch->branch_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.manageBranch.fields.parent_hospital') }}
                        </th>
                        <td>
                            {{ $manageBranch->parent_hospital->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection