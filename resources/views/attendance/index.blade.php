<x-app>
  <x-slot name="heading">Attendances</x-slot>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Employees Attendance
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover text-center" id="employee_table">
              <thead class="text-center">
                <tr>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      <input type="checkbox" name="check-all" id="check-all"> <span class="ms-3">Employee</span> <span class="ms-1">Name</span>
                    </span>
                  </th>
                  <th style="padding-right: 15em;">
                    <span class="d-flex align-items-center">
                      Employee <span class="ms-1">ID</span>
                    </span>
                  </th>
                  <th style="padding-right: 7em;">Date</th>
                  <th style="padding-right: 7em;">Shift</th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Attendance <span class="ms-1">Status</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Clock <span class="ms-1">In</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Clock <span class="ms-1">Out</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Absent <span class="ms-1">Reason</span> <i class="ms-2 fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="Reason for why not present"></i>
                    </span>
                  </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($attendances as $attendance)
                  <tr>
                    <td>{{ $attendance->name }}</td>
                    <td>{{ $attendance->employee_id }}</td>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ $attendance->shift }}</td>
                    <td>
                      <span class="badge {{ ($attendance->attendance_status == 'On Time' ? 'bg-success' : ($attendance->attendance_status == 'Late' ? 'bg-danger' : 'bg-warning')) }}">{{ $attendance->attendance_status }}</span>
                    </td>
                    <td>
                      <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#attendance-modal-{{ $attendance->id }}">
                        <i class="bi bi-camera"></i> {{ $attendance->clock_in }}
                      </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#attendance-clockout-modal-{{ $attendance->id }}">
                          <i class="bi bi-camera"></i> {{ $attendance->clock_out }}
                        </button>
                    </td>
                    <td>
                      <span class="badge {{ ($attendance->reason == 'Sick' ? 'bg-success' : ($attendance->reason == 'Permit' ? 'bg-warning' : 'bg-danger')) }}">
                        {{ $attendance->reason }}
                      </span>
                    </td>
                    <td>
                      <button type="button" class="btn btn-sm btn-primary">Actions</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('attendance._modal')
  @include('attendance.clockout')
</x-app>