<x-app>
  <x-slot name="heading">Dashboard</x-slot>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          @php
              $hour = date('H');
              $greet;
              ($hour >= 5 && $hour <= 10 ? $greet = 'Morning' : 
              ($hour > 10 && $hour <= 3 ? $greet = 'Afternoon' : 
              ($hour > 3 && $hour <= 7 ? $greet = 'Evening' : $greet = 'Night')))
          @endphp
          <h3>Good {{ $greet }}, {{ auth()->user()->name }}!</h3>
          <span class="text-secondary mt-1">It's {{ date('D, d M Y') }}</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Employees Attendance
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="employee_table">
              <thead>
                <tr>
                  <th>
                    <span class="d-flex align-items-center">
                      <input type="checkbox" name="check-all" id="check-all"> <span class="ms-3">Employee</span> <span class="ms-1">Name</span>
                    </span>
                  </th>
                  <th>
                    <span class="d-flex align-items-center">
                      Employee <span class="ms-1">ID</span>
                    </span>
                  </th>
                  <th>Date</th>
                  <th>Shift</th>
                  <th>
                    <span class="d-flex align-items-center">
                      Attendance <span class="ms-1">Status</span>
                    </span>
                  </th>
                  <th>
                    <span class="d-flex align-items-center">
                      Clock <span class="ms-1">In</span>
                    </span>
                  </th>
                  <th>
                    <span class="d-flex align-items-center">
                      Clock <span class="ms-1">Out</span>
                    </span>
                  </th>
                  <th>
                    <span class="d-flex align-items-center">
                      Absent <span class="ms-1">Reason</span> <i class="ms-2 fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="Reason for why not present"></i>
                    </span>
                  </th>
                  <th>
                    <span class="d-flex align-items-center">
                      Presence <span class="ms-1">Location</span>
                    </span>
                  </th>
                  <th>Manager</th>
                  <th>Division</th>
                  <th>Profession</th>
                  <th>
                    <span class="d-flex align-items-center">
                      Job <span class="ms-1">Level</span>
                    </span>
                  </th>
                  <th>
                    <span class="d-flex align-items-center">
                      Employment <span class="ms-2">Status</span>
                    </span>
                  </th>
                  <th>Branch</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app>