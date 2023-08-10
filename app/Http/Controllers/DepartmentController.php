<?php

namespace App\Http\Controllers;


use App\Models\Department;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments.index', [
            'departments' => Department::paginate()
        ]);
    }
    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255'
        ]);

        Department::create($data);

        return back()->with('message', 'Department created successfully');
    }
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Department $department, Request $request)
    {

        $data = $request->validate([
            'name' => 'required|max:255'
        ]);

        $department->update($data);

        return back()->with('message', 'Departments updated.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('massage', 'Department deleted.');
    }
}




