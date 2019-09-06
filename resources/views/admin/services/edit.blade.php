@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.service.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.services.update", [$service->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.service.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($service) ? $service->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('hospitals_offerings') ? 'has-error' : '' }}">
                <label for="hospitals_offering">{{ trans('cruds.service.fields.hospitals_offering') }}
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="hospitals_offerings[]" id="hospitals_offerings" class="form-control select2" multiple="multiple">
                    @foreach($hospitals_offerings as $id => $hospitals_offering)
                        <option value="{{ $id }}" {{ (in_array($id, old('hospitals_offerings', [])) || isset($service) && $service->hospitals_offerings->contains($id)) ? 'selected' : '' }}>{{ $hospitals_offering }}</option>
                    @endforeach
                </select>
                @if($errors->has('hospitals_offerings'))
                    <p class="help-block">
                        {{ $errors->first('hospitals_offerings') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.hospitals_offering_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('doctors_offering_services') ? 'has-error' : '' }}">
                <label for="doctors_offering_service">{{ trans('cruds.service.fields.doctors_offering_service') }}*
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="doctors_offering_services[]" id="doctors_offering_services" class="form-control select2" multiple="multiple" required>
                    @foreach($doctors_offering_services as $id => $doctors_offering_service)
                        <option value="{{ $id }}" {{ (in_array($id, old('doctors_offering_services', [])) || isset($service) && $service->doctors_offering_services->contains($id)) ? 'selected' : '' }}>{{ $doctors_offering_service }}</option>
                    @endforeach
                </select>
                @if($errors->has('doctors_offering_services'))
                    <p class="help-block">
                        {{ $errors->first('doctors_offering_services') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.doctors_offering_service_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('cost') ? 'has-error' : '' }}">
                <label for="cost">{{ trans('cruds.service.fields.cost') }}</label>
                <input type="text" id="cost" name="cost" class="form-control" value="{{ old('cost', isset($service) ? $service->cost : '') }}">
                @if($errors->has('cost'))
                    <p class="help-block">
                        {{ $errors->first('cost') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.cost_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection