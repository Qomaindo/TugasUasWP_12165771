<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = employee::orderBy('created_at', 'DESC')->paginate(10);
        return view('employees.index', compact('employees'));

    }

    public function create()
    {
        return view('employees.add');
    }

    public function destroy($id)
    {
        $employee = $Employee::find($id);

        $employee->delete();
        return redirect('/employee')->with(['success' => '<strong>'.$employee->title.'</strong> Dihapus']);
    }

   

    public function save(Request $request)
    {
         $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|string|unique:employees,email',
            'notlp' => 'required|string',
            'alamat' => 'required|string'
         ]);

         try
         {
             $employee = Employee::create([
                 'name' => $request->name,
                 'email' => $request->email,
                 'notlp' => $request->notlp,
                 'alamat' => $request->alamat
                
             ]);
            

             return redirect('/employee')->with(['success' => 'Data telah disimpan']);
         }

         catch(\Exception $e)
         {
            return redirect()->back()->with(['error' => $e->getMessage()]);
         }
    }
}
