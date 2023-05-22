<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Branch;
use App\Models\City;
use App\Models\Division;
use App\Models\Employee;
use App\Models\EmploymentStatus;
use App\Models\Gender;
use App\Models\JobLevel;
use App\Models\Manager;
use App\Models\MaritalStatus;
use App\Models\Profession;
use App\Models\Province;
use App\Models\Religion;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::select([
            'employees.id',
            'users.name',
            'users.email',
            'users.phone',
            'branches.branch',
            'divisions.division',
            'professions.profession',
            'job_levels.job_level',
            'employment_statuses.employment_status',
            'employees.join_date',
            'employees.end_date',
            'marital_statuses.marital_status',
            'employees.birth_date',
            'employees.address',
            'religions.religion',
            'genders.gender',
          ])
          ->join('users', 'users.id', '=', 'employees.user_id')
          ->join('branches', 'branches.id', '=', 'employees.branch_id')
          ->join('divisions', 'divisions.id', '=', 'employees.division_id')
          ->join('professions', 'professions.id', '=', 'employees.profession_id')
          ->join('job_levels', 'job_levels.id', '=', 'employees.job_level_id')
          ->join('employment_statuses', 'employment_statuses.id', '=', 'employees.employment_status_id')
          ->join('marital_statuses', 'marital_statuses.id', '=', 'employees.marital_status_id')
          ->join('religions', 'religions.id', '=', 'employees.religion_id')
          ->join('genders', 'genders.id', '=', 'employees.gender_id')
          ->get();

        return response()
        ->view('employee.index', compact('employees'))
        ->header('Cache-control', 'no cache, no store, must-revalidate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'cities' => City::all(),
            'genders' => Gender::all(),
            'branches' => Branch::all(),
            'managers' => Manager::all(),
            'divisions' => Division::all(),
            'religions' => Religion::all(),
            'provinces' => Province::all(),
            'jobLevels' => JobLevel::all(),
            'professions' => Profession::all(),
            'maritalStatuses' => MaritalStatus::all(),
            'employmentStatuses' => EmploymentStatus::all(),
        ];

        return view('employee.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $attributes = $request->all();
    
            $user = User::create([
                'permission_id' => 2,
                'name' => $attributes['name'],
                'email' => $attributes['email'],
                'phone' => $attributes['phone'],
                'password' => bcrypt($attributes['password']),
            ]);
    
            Employee::create([
                'user_id' => $user['id'],
                'place_of_birth_id' => (int) $attributes['place_of_birth_id'],
                'birth_date' => $attributes['birth_date'],
                'gender_id' => (int) $attributes['gender_id'],
                'marital_status_id' => (int) $attributes['marital_status_id'],
                'religion_id' => (int) $attributes['religion_id'],
                'address' => $attributes['address'],
                'province_id' => (int) $attributes['province_id'],
                'city_id' => (int) $attributes['city_id'],
                'join_date' => $attributes['join_date'],
                'end_date' => $attributes['end_date'] ?? null,
                'division_id' => (int) $attributes['division_id'],
                'profession_id' => (int) $attributes['profession_id'],
                'job_level_id' => (int) $attributes['job_level_id'],
                'employment_status_id' => (int) $attributes['employment_status_id'],
                'branch_id' => (int) $attributes['branch_id'],
            ]);
    
            Alert::success('Success!', 'Employee Created Successfully!');
            return redirect()
                ->route('employee.index')
                ->header('Cache-control', 'no cache, no store, must-revalidate');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
