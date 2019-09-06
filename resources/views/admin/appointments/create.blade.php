@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.appointment.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.appointments.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
                <label for="client">{{ trans('cruds.appointment.fields.client') }}*</label>
                <select name="client_id" id="client" class="form-control select2" required>
                    @foreach($clients as $id => $client)
                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->client ? $appointment->client->id : old('client_id')) == $id ? 'selected' : '' }}>{{ $client }}</option>
                    @endforeach
                </select>
                @if($errors->has('client_id'))
                    <p class="help-block">
                        {{ $errors->first('client_id') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('service_booked_id') ? 'has-error' : '' }}">
                <label for="service_booked">{{ trans('cruds.appointment.fields.service_booked') }}*</label>
                <select name="service_booked_id" id="service_booked" class="form-control select2" required>
                    @foreach($service_bookeds as $id => $service_booked)
                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->service_booked ? $appointment->service_booked->id : old('service_booked_id')) == $id ? 'selected' : '' }}>{{ $service_booked }}</option>
                    @endforeach
                </select>
                @if($errors->has('service_booked_id'))
                    <p class="help-block">
                        {{ $errors->first('service_booked_id') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('doctor_id') ? 'has-error' : '' }}">
                <label for="doctor">{{ trans('cruds.appointment.fields.doctor') }}*</label>
                <select name="doctor_id" id="doctor" class="form-control select2" required>
                    @foreach($doctors as $id => $doctor)
                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->doctor ? $appointment->doctor->id : old('doctor_id')) == $id ? 'selected' : '' }}>{{ $doctor }}</option>
                    @endforeach
                </select>
                @if($errors->has('doctor_id'))
                    <p class="help-block">
                        {{ $errors->first('doctor_id') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('hospital_id') ? 'has-error' : '' }}">
                <label for="hospital">{{ trans('cruds.appointment.fields.hospital') }}*</label>
                <select name="hospital_id" id="hospital" class="form-control select2" required>
                    @foreach($hospitals as $id => $hospital)
                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->hospital ? $appointment->hospital->id : old('hospital_id')) == $id ? 'selected' : '' }}>{{ $hospital }}</option>
                    @endforeach
                </select>
                @if($errors->has('hospital_id'))
                    <p class="help-block">
                        {{ $errors->first('hospital_id') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('date_and_time') ? 'has-error' : '' }}">
                <label for="date_and_time">{{ trans('cruds.appointment.fields.date_and_time') }}*</label>
                <input type="text" id="date_and_time" name="date_and_time" class="form-control datetime" value="{{ old('date_and_time', isset($appointment) ? $appointment->date_and_time : '') }}" required>
                @if($errors->has('date_and_time'))
                    <p class="help-block">
                        {{ $errors->first('date_and_time') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.date_and_time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('branch_id') ? 'has-error' : '' }}">
                <label for="branch">{{ trans('cruds.appointment.fields.branch') }}</label>
                <select name="branch_id" id="branch" class="form-control select2">
                    @foreach($branches as $id => $branch)
                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->branch ? $appointment->branch->id : old('branch_id')) == $id ? 'selected' : '' }}>{{ $branch }}</option>
                    @endforeach
                </select>
                @if($errors->has('branch_id'))
                    <p class="help-block">
                        {{ $errors->first('branch_id') }}
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