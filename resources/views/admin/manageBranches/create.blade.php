@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.manageBranch.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.manage-branches.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.manageBranch.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($manageBranch) ? $manageBranch->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.manageBranch.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('branch_address') ? 'has-error' : '' }}">
                <label for="branch_address">{{ trans('cruds.manageBranch.fields.branch_address') }}*</label>
                <input type="text" id="branch_address" name="branch_address" class="form-control" value="{{ old('branch_address', isset($manageBranch) ? $manageBranch->branch_address : '') }}" required>
                @if($errors->has('branch_address'))
                    <p class="help-block">
                        {{ $errors->first('branch_address') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.manageBranch.fields.branch_address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('branch_email') ? 'has-error' : '' }}">
                <label for="branch_email">{{ trans('cruds.manageBranch.fields.branch_email') }}*</label>
                <input type="email" id="branch_email" name="branch_email" class="form-control" value="{{ old('branch_email', isset($manageBranch) ? $manageBranch->branch_email : '') }}" required>
                @if($errors->has('branch_email'))
                    <p class="help-block">
                        {{ $errors->first('branch_email') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.manageBranch.fields.branch_email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('parent_hospital_id') ? 'has-error' : '' }}">
                <label for="parent_hospital">{{ trans('cruds.manageBranch.fields.parent_hospital') }}*</label>
                <select name="parent_hospital_id" id="parent_hospital" class="form-control select2" required>
                    @foreach($parent_hospitals as $id => $parent_hospital)
                        <option value="{{ $id }}" {{ (isset($manageBranch) && $manageBranch->parent_hospital ? $manageBranch->parent_hospital->id : old('parent_hospital_id')) == $id ? 'selected' : '' }}>{{ $parent_hospital }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent_hospital_id'))
                    <p class="help-block">
                        {{ $errors->first('parent_hospital_id') }}
                    </p>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection