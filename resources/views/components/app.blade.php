<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard - Mazer Admin Dashboard</title>
  <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/choices.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
  <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
  
  <link rel="stylesheet" href="{{ asset('assets/css/pages/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="{{ asset('assets/js/choices.js') }}"></script>

  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  <style>
    table#employee_table thead tr thead {
        background: #F8F9FB !important; 
    }
  </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-primary">
                Goodeva
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item active">
                <a href="/" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->permission_id == 1)
                <li class="sidebar-item">
                    <a href="{{ route('employee.index') }}" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Employee</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('employee.create') }}" class='sidebar-link'>
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Add Employee</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('attendance.index') }}" class='sidebar-link'>
                        <i class="fa-solid fa-clipboard-user"></i>
                        <span>Attendance (Read)</span>
                    </a>
                </li>
            @endif

            <li class="sidebar-item">
                @php
                        use App\Models\Employee;
                        use App\Models\Attendance;
                        if (auth()->user()->permission_id != 1) {
                            $employee = Employee::where('user_id', auth()->user()->id)->first()->id;
                            $today_attendance_id = Attendance::where('employee_id', $employee)->where('date', date('Y-m-d'))->first()->id ?? '';
                        }
                @endphp

                @if (auth()->user()->permission_id != 1)
                    @if ($today_attendance_id)
                        <a href="{{ route('edit.attendance') }}" class='sidebar-link'>
                    @else
                        <a href="{{ route('attendance.create') }}" class='sidebar-link'>
                    @endif
                            <i class="fa-solid fa-clipboard-user"></i>
                            <span>Attendance</span>
                        </a>
                @endif
            </li>

            <li class="sidebar-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn sidebar-link">
                        <i class="bi bi-box-arrow-left"></i> 
                        <span>Logout</span>
                    </button>
                </form>
            </li>
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @include('sweetalert::alert')

<div class="page-heading">
    <h3>{{ $heading }}</h3>
</div>
<div class="page-content">
    <section class="row">
        {{ $slot }}
    </section>
</div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="text-center">
                <p>2023 &copy; Goodeva Technology - Advanced Attendance Automation Solution</p>
            </div>
        </div>
    </footer>
    <!-- Include Choices JavaScript -->
  <script src="{{ asset('assets/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    
<!-- Need: Apexcharts -->
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('assets/js/pages/datatables.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/webcamjs/webcam.min.js') }}"></script>

<script>
    $('.date-attendance').text(new Date().toLocaleDateString('en-US', {
        day: 'numeric',
        month: 'short',
        year: 'numeric',
    }));

    $('.time-attendance').text(new Date().toLocaleString('en-US', {
        hour: 'numeric',
        minute: 'numeric',
        hour12: true,
    }));

  $(document).ready(function () {
    $('#camera-btn').on('click', function () {
      Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 90
      });
  
      Webcam.attach('#camera-box');
    });

      function takeSnapshot() {
        Webcam.snap(function (dataUri) {
          $('#camera-result').html(`<img src="${dataUri}" class="d-block mx-auto rounded" />`)
          var raw_image_data = dataUri.replace(/^data\:image\/\w+\;base64\,/, '');
          $('#image-input').val(raw_image_data);
        });

        $('#camera-box').removeClass('d-block');
        $('#camera-box').addClass('d-none');

        $('#camera-result').removeClass('d-none');
        $('#camera-result').addClass('d-block');
        
        $('#take-photo-btn').addClass('d-none');

        $('#re-capture-btn').removeClass('d-none');
        $('#re-capture-btn').addClass('d-block');

        $('#send-photo-btn').removeClass('d-none');
        $('#send-photo-btn').addClass('d-block');
      }

      function takeSnapshotUpdate() {
        Webcam.snap(function (dataUri) {
          $('#camera-result').html(`<img src="${dataUri}" class="d-block mx-auto rounded" />`)
          var raw_image_data = dataUri.replace(/^data\:image\/\w+\;base64\,/, '');
          $('#image-input-update').val(raw_image_data);
        });

        $('#camera-box').removeClass('d-block');
        $('#camera-box').addClass('d-none');

        $('#camera-result').removeClass('d-none');
        $('#camera-result').addClass('d-block');
        
        $('#take-photo-btn').addClass('d-none');

        $('#re-capture-btn').removeClass('d-none');
        $('#re-capture-btn').addClass('d-block');

        $('#send-photo-btn-update').removeClass('d-none');
        $('#send-photo-btn-update').addClass('d-block');
      }

      $('#take-photo-btn').on('click', takeSnapshot);
      $('#take-photo-btn').on('click', takeSnapshotUpdate);

      $('#re-capture-btn').on('click', function () {
        $('#camera-box').removeClass('d-none');
        $('#camera-box').addClass('d-block');

        $('#camera-result').removeClass('d-block');
        $('#camera-result').addClass('d-none');
        
        $('#take-photo-btn').removeClass('d-none');
        $('#take-photo-btn').addClass('d-block');

        $('#re-capture-btn').removeClass('d-block');
        $('#re-capture-btn').addClass('d-none');

        if ($('#send-photo-btn') !== undefined) {
            $('#send-photo-btn').removeClass('d-block');
            $('#send-photo-btn').addClass('d-none');
        }
      });
  });
</script>

</body>

</html>
