<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    public function index() {
        // mengambil data karyawan melalui model
        $employees = Employee::all();
        // mengirim data karyawan ke view
        return view("employee.index", compact('employees'));
    }

    public function create() {
        return view("employee.create");
    }

    public function store(EmployeeRequest $request) {
        Employee::create($request->validated());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan');
    }

    public function edit($id) {
        // mencari data karyawan berdasarkan id
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(EmployeeRequest $request, $id) {
        // cari data karyawan yg mau diupdate
        $employee = Employee::findOrFail($id);

        // proses menyimpan data baru
        $employee->update($request->validated());

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy( $id) {
        // mengambil data yang mau dihapus berdasarkan variable $id
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('karyawan.index')->with('success', 'Berhasil menghapus data');
    }
}
