@foreach ($attendances as $attendance)
<div class="modal fade" id="attendance-clockout-modal-{{ $attendance->id }}" tabindex="-1" aria-labelledby="attendance-clockout-modal-{{ $attendance->id }}Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="attendance-clockout-modal-{{ $attendance->id }}Label">{{ $attendance->name }}'s Attendance</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-around">
        <img src="{{ asset('storage/' . $attendance->clock_out_image_url) }}" alt="Employee-Attendance-Photo">
        <iframe src="https://maps.google.com/maps?q={{ $attendance->clock_out_location }}&amp;z=15&amp;output=embed" frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach