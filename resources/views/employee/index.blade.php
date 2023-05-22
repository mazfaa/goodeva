<x-app>
  <x-slot name="heading">Employees</x-slot>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Employees Table
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="employee_table">
              <thead>
                <tr>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      <input type="checkbox" name="check-all" id="check-all"> <span class="ms-3">Employee</span> <span class="ms-1">Name</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">Branch</th>
                  <th style="padding-right: 5em;">Division</th>
                  <th style="padding-right: 5em;">Profession</th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Job <span class="ms-1">Level</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Employment <span class="ms-1">Status</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Join <span class="ms-1 me-2">Date</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      End <span class="ms-1 me-2">Date</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Resign <span class="ms-1">Date</span>
                    </span>
                  </th>
                  <th>Email</th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Marital <span class="ms-1">Status</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Birth <span class="ms-1">Date</span>
                    </span>
                  </th>
                  <th style="padding-right: 10em;">Address</th>
                  <th style="padding-right: 5em;">
                    <span class="d-flex align-items-center">
                      Mobile <span class="ms-1">Phone</span>
                    </span>
                  </th>
                  <th style="padding-right: 5em;">Religion</th>
                  <th style="padding-right: 5em;">Gender</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($employees as $employee)
                  <tr>
                    <td>
                      <span class="d-flex align-items-center">
                        <input type="checkbox" name="check-all" id="check-all"> <span class="ms-3">{{ $employee->name }}</span>
                      </span>
                    </td>
                    <td>{{ $employee->branch }}</td>
                    <td>{{ $employee->division }}</td>
                    <td>{{ $employee->profession }}</td>
                    <td>{{ $employee->job_level }}</td>
                    <td>{{ $employee->employment_status }}</td>
                    <td>{{ $employee->join_date }}</td>
                    <td>{{ $employee->end_date }}</td>
                    <td>{{ $employee->end_date }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->marital_status }}</td>
                    <td>{{ $employee->birth_date }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->religion }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>Detail</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app>