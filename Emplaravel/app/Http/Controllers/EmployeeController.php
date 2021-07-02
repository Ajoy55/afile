<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;
use Validator;

class EmployeeController extends Controller
{
    public function employee_view()
    {

       $employee = Employee::all();

       return view('employee.index',compact('employee')); 
    }

        function list()
        {

            return Employee::all();
        }

            function add(Request $req)
            {
                        $employee =New Employee;
                        $employee->name = $req->name;
                        $employee->post = $req->post;
                        $result=$employee->save();

                        if($result)
                        {

                            return ["Result"=>"Data saved" ];
                        }
                        else{

                            return ["Result"=>"Data failed" ];
                        }

               
            }

            public function update(Request $req)
            {
                $employee =Employee::find($req->id);
                $employee->name = $req->name;
                $employee->post = $req->post;
                $result = $employee->save();
                if($result)
                {
                    return ["Result"=>"Data Updated" ];

                } 
                else{
                    return ["Result"=>"Data not updated" ];
                }

            }

            public function delete($id)
            {
                $employee = Employee::find($id);
                $result = $employee->delete();
                if($result)
                {
                    return ["Result"=>"Data Deleted" ];

                } 
                else{
                    return ["Result"=>"Data not Deleted" ];
                }
            }

            public function search($name)
            {

                return Employee::where("name","like","%".$name."%")->get();
            }

            function testData(Request $req)
            {

                $rules= array(
                    "name" =>"required"


                );
                $validator = Validator::make($req->all(),$rules);

                if($validator->fails())
                {

                    return response()->json($validator->errors(),401);
                }
                else
                $employee =New Employee;
                $employee->name = $req->name;
                $employee->post = $req->post;
                $result=$employee->save();

                if($result)
                {

                    return ["Result"=>"Data saved" ];
                }
                else{

                    return ["Result"=>"Data failed" ];
                }




            }


}
