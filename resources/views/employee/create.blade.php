<x-app>
  <x-slot name="heading">
    Employee
  </x-slot>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Employee</h4>
          <p class="text-small text-secondary">Fill all employee personal information data</p>
        </div>
        <div class="card-body">
          <div class="row">
            <form action="{{ route('employee.store') }}" method="post" class="employee-form">
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <h6>Name</h6>
                  <div class="form-group position-relative has-icon-left">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Full Name">
                    <div class="form-control-icon">
                      <i class="bi bi-person"></i>
                    </div>
    
                    @error('name')
                      <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
    
                  <div class="col-sm-6">
                    <h6>Email</h6>
                    <div class="form-group position-relative has-icon-left">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email">
                      <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                      </div>
      
                      @error('email')
                        <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Phone</h6>
                <div class="form-group position-relative has-icon-left">
                  <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone">
                  <div class="form-control-icon">
                    <i class="bi bi-phone"></i>
                  </div>
  
                  @error('phone')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>Place of Birth</h6>
                <div class="form-group position-relative">
                  <select name="place_of_birth_id" id="placeOfBirthForm" class="form-select">
                    <option selected>Select Place of Birth</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" @if (old('place_of_birth_id') == $city->id) {{ 'selected' }} @endif>{{ $city->city }}</option>
                    @endforeach
                  </select>
  
                  @error('place_of_birth_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Date of Birth</h6>
                <div class="form-group position-relative has-icon-left">
                  <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('date', date('Y-m-d')) }}">
                  <div class="form-control-icon">
                    <i class="bi bi-calendar-check"></i>
                  </div>
  
                  @error('birth_date')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>Gender</h6>
                <div class="form-group position-relative">
                  <select name="gender_id" id="genderForm" class="form-select">
                    <option selected>Select Gender</option>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}" @if (old('gender_id') == $gender->id) {{ 'selected' }} @endif>{{ $gender->gender }}</option>
                    @endforeach
                  </select>
  
                  @error('gender_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Marital Status</h6>
                <div class="form-group position-relative">
                  <select name="marital_status_id" id="maritalStatusForm" class="form-select">
                    <option selected>Select Marital Status</option>
                    @foreach ($maritalStatuses as $maritalStatus)
                        <option value="{{ $maritalStatus->id }}" @if (old('marital_status_id') == $maritalStatus->id) {{ 'selected' }} @endif>{{ $maritalStatus->marital_status }}</option>
                    @endforeach
                  </select>
  
                  @error('marital_status_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>Religion</h6>
                <div class="form-group position-relative">
                  <select name="religion_id" id="religionForm" class="form-select">
                    <option selected>Select Religion</option>
                    @foreach ($religions as $religion)
                        <option value="{{ $religion->id }}" @if (old('religion_id') == $religion->id) {{ 'selected' }} @endif>{{ $religion->religion }}</option>
                    @endforeach
                  </select>
  
                  @error('religion_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Address</h6>
                <div class="form-group position-relative has-icon-left">
                  <textarea type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" placeholder="Address"></textarea>
                  <div class="form-control-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
  
                  @error('address')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>City</h6>
                <div class="form-group position-relative">
                  <select name="city_id" id="cityForm" class="form-select">
                    <option selected>Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" @if (old('city_id') == $city->id) {{ 'selected' }} @endif>{{ $city->city }}</option>
                    @endforeach
                  </select>
  
                  @error('city_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Province</h6>
                <div class="form-group position-relative">
                  <select name="province_id" id="provinceForm" class="form-select">
                    <option selected="selected">Select Province</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}" @if (old('province_id') == $province->id) {{ 'selected' }} @endif>{{ $province->province }}</option>
                    @endforeach
                  </select>
  
                  @error('province_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>Employment Status</h6>
                <div class="form-group position-relative">
                  <select name="employment_status_id" id="employmentStatusForm" class="form-select">
                    <option selected>Select Employment Status</option>
                    @foreach ($employmentStatuses as $employmentStatus)
                        <option value="{{ $employmentStatus->id }}" @if (old('employment_status_id') == $employmentStatus->id) {{ 'selected' }} @endif>{{ $employmentStatus->employment_status }}</option>
                    @endforeach
                  </select>
  
                  @error('employment_status_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Join Date</h6>
                <div class="form-group position-relative has-icon-left">
                  <input type="date" name="join_date" class="form-control @error('join_date') is-invalid @enderror" value="{{ old('date', date('Y-m-d')) }}" placeholder="Input with icon left">
                  <div class="form-control-icon">
                    <i class="bi bi-box-arrow-in-right"></i>
                  </div>
  
                  @error('join_date')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>End Date</h6>
                <div class="form-group position-relative has-icon-left">
                  <input type="text" id="endDateForm" name="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ old('date', date('Y-m-d')) }}" placeholder="Input with icon left">
                  <div class="form-control-icon">
                    <i class="bi bi-box-arrow-in-left"></i>
                  </div>
  
                  @error('end_date')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Branch</h6>
                <div class="form-group position-relative">
                  <select name="branch_id" id="branchForm" class="form-select">
                    <option selected>Select Branch</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" @if (old('branch_id') == $branch->id) {{ 'selected' }} @endif>{{ $branch->branch }}</option>
                    @endforeach
                  </select>
  
                  @error('branch_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>Division</h6>
                <div class="form-group position-relative">
                  <select name="division_id" id="divisionForm" class="form-select">
                    <option selected>Select Division</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}" @if (old('division_id') == $division->id) {{ 'selected' }} @endif>{{ $division->division }}</option>
                    @endforeach
                  </select>
  
                  @error('division_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row my-2">
              <div class="col-sm-6">
                <h6>Job Position</h6>
                <div class="form-group position-relative">
                  <select name="profession_id" id="professionForm" class="form-select">
                    <option selected>Select Job Position</option>
                    @foreach ($professions as $profession)
                        <option value="{{ $profession->id }}" @if (old('profession_id') == $profession->id) {{ 'selected' }} @endif>{{ $profession->profession }}</option>
                    @endforeach
                  </select>
  
                  @error('profession_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>Job Level</h6>
                <div class="form-group position-relative">
                  <select name="job_level_id" id="jobLevelForm" class="form-select">
                    <option selected>Select Job Level</option>
                    @foreach ($jobLevels as $jobLevel)
                        <option value="{{ $jobLevel->id }}" @if (old('job_level_id') == $jobLevel->id) {{ 'selected' }} @endif>{{ $jobLevel->job_level }}</option>
                    @endforeach
                  </select>
  
                  @error('job_level_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="row">
              <div class="col-sm-6">
                <h6>Manager</h6>
                <div class="form-group position-relative">
                  <select name="manager_id" id="managerForm" class="form-select">
                    <option selected>Select Manager</option>
                    @foreach ($managers as $manager)
                        <option value="{{ $manager->id }}" @if (old('manager_id') == $manager->id) {{ 'selected' }} @endif>{{ $manager->manager }}</option>
                    @endforeach
                  </select>
  
                  @error('manager_id')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>
  
              <div class="col-sm-6">
                <h6>Password</h6>
                <div class="form-group position-relative has-icon-left">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password">
                  <div class="form-control-icon">
                    <i class="bi bi-lock"></i>
                  </div>
  
                  @error('password')
                    <span class="invalid-feedback" style="margin-top: -1em;">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-12 d-flex justify-content-end">
                  <a href="/" class="btn btn-light me-2">Cancel</a>
                  <button type="submit" class="btn btn-primary ajax_data">Submit</button>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</x-app>