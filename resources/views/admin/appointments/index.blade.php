@extends('layouts.admin')
@section('content')
@can('appointment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.appointments.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.appointment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.appointment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Appointment">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.client') }}
                    </th>
                    <th>
                        {{ trans('cruds.user.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.service_booked') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.doctor') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.hospital') }}
                    </th>
                    <th>
                        {{ trans('cruds.manageHospital.fields.address') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.date_and_time') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.branch') }}
                    </th>
                    <th>
                        {{ trans('cruds.manageBranch.fields.branch_address') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.is_completed') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.rescheduled_to') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('appointment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.appointments.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.appointments.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'client_name', name: 'client.name' },
{ data: 'client.email', name: 'client.email' },
{ data: 'service_booked_name', name: 'service_booked.name' },
{ data: 'doctor_name', name: 'doctor.name' },
{ data: 'hospital_name', name: 'hospital.name' },
{ data: 'hospital.address', name: 'hospital.address' },
{ data: 'date_and_time', name: 'date_and_time' },
{ data: 'branch_name', name: 'branch.name' },
{ data: 'branch.branch_address', name: 'branch.branch_address' },
{ data: 'is_completed', name: 'is_completed' },
{ data: 'rescheduled_to', name: 'rescheduled_to' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  $('.datatable-Appointment').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

</script>
@endsection