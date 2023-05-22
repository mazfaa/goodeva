<x-app>
  <x-slot name="heading">Attendance</x-slot>

  <div class="row justify-content-center" style="margin-top: 5em; margin-bottom: 10em;">
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div>
            <h5 class="text-primary">{{ $name }}</h5>
            <p class="text-secondary fs-6 date-attendance">21 May 2023</p>
          </div>
          <p class="text-secondary fs-6 time-attendance">00:50:00 PM</p>
        </div>
        <div class="card-body">
          <div class="text-center justify-content-center">
            <img src="{{ asset('assets/images/local/person.png') }}" class="rounded w-25 d-block mx-auto mb-4" alt="Take-Photo">
            <button type="button" class="btn btn-primary clock-in-btn" id="camera-btn" data-bs-toggle="modal" data-bs-target="#camera-modal">
              <i class="bi bi-camera"></i> <span class="align-middle">Clock In</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="camera-modal" tabindex="-1" aria-labelledby="camera-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="camera-modalLabel">Attendance Check-in</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="camera-box" class="mx-auto"></div>
          <div id="camera-result" class="d-none"></div>
          <form action="{{ route('attendance.store') }}" method="post" id="image-form"> 
            @csrf
            <input type="hidden" name="image" id="image-input">
            <input type="hidden" name="coords" id="coordinate-input">
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-sm btn-secondary d-none" id="re-capture-btn"><i class="bi bi-arrow-clockwise me-1"></i> Re-Capture</button>
          <button type="button" class="btn btn-sm btn-primary" id="take-photo-btn">
            <i class="bi bi-camera"></i> <span class="align-middle">Take Photo</span>
          </button>
          <button type="submit" class="btn btn-sm btn-primary d-none" id="send-photo-btn" form="image-form"><i class="bi bi-upload me-1"></i> Send Photo</button>
        </div>
      </div>
    </div>
  </div>
</x-app>