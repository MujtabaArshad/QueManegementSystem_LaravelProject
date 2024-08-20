<?php

namespace App\Http\Controllers\AdminDashboard;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserBank;
use App\Models\Role; 
use Illuminate\Validation\Rule;
class BankuserController extends Controller
{
    // role
    
    public function adduser()
    {
        
        $roles = Role::all();

        
        return view('CRUD.add-user', compact('roles'));
    }


    public function ShowUser()
    {
        $users = UserBank::all(); 
        return view('CRUD.view-user', compact('users'));
    }
    

    public function insertData(Request $req)
    {
        $validatedData = $req->validate([
        
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'Email' => 'required|email|unique:user_banks,Email',
            'Address' => 'required|string|max:255',
            'Age' => 'required|integer|min:1',
            // 'NTN' => 'required|integer|unique:user_banks,NTN|min:13|max:13',
            'NTN' => 'required|digits:13|unique:user_banks,NTN',

            //    'NTN' => ['required', 'integer', 'max:13', 'min:13'],
            'Password' => 'required|string|min:8',
            'Gender' => 'required|string|in:Male,Female',
            'RoleID' => 'required|integer|exists:roles,id',
            'Status' => 'nullable|boolean',
        
        ]);
        $insData = new UserBank();
        $insData->FirstName = $req->input('FirstName');

        $insData->LastName = $req->input('LastName');

        $insData->Email = $req->input('Email');

        $insData->Address = $req->input('Address');

        $insData->Age = $req->input('Age');

        $insData->NTN = $req->input('NTN');

        $insData->Password = bcrypt($req->input('Password'));

        $insData->Gender = $req->input('Gender');

        $insData->RoleID = $req->input('RoleID');

        $insData->Status = $req->input('Status', false); 

        $insData->save();

        return redirect()->route('ShowUser')->with('success', 'User registered successfully.');
         }
    

         // edit user
         public function edituser($id)
         {

         $users = UserBank::find($id);


         $roles = Role::all();


         return view('CRUD.edit-user', compact('users', 'roles'));
         }
    


         // editview
         public function Editview($id)
      
              {
      
              $viewuser = UserBank::find($id);
      
      
              $roles = Role::all();
      
      
              return view('CRUD.editview', compact('viewuser', 'roles'));
              }
              
              public function updateData(Request $req, $id)
              {
                  $validatedData = $req->validate([
                      'FirstName' => 'required|string|max:255',
                      'LastName' => 'required|string|max:255',
                      'Email' => [
                          'required',
                          'email',
                          Rule::unique('user_banks', 'Email')->ignore($id),
                      ],
                      'Address' => 'required|string|max:255',
                      'Age' => 'required|integer|min:1',
                      'NTN' => [
                          'required',
                          'digits:13',
                          Rule::unique('user_banks', 'NTN')->ignore($id), 
                      ],
                      'Password' => 'nullable|string|min:8', 
                      'Status' => 'nullable|boolean',
                  ]);
              
                  $updateData = UserBank::find($id);
              
                  if ($updateData) {
                      
                      $updateData->FirstName = $req->FirstName;
                      $updateData->LastName = $req->LastName;
                      $updateData->Email = $req->Email;
                      $updateData->Address = $req->Address;
                      $updateData->Age = $req->Age;
                      $updateData->NTN = $req->NTN;
                      
                      
                      if ($req->filled('Password')) {
                          $updateData->Password = bcrypt($req->Password);
                      }
              
                      
              
                      // Update status based on checkbox state
                      $updateData->Status = $req->has('Status') ? 1 : 0;
                      $updateData->save();
                      return redirect()->route('ShowUser')->with('success', 'User updated successfully.');
                  } else {
                      return redirect()->route('ShowUser')->with('error', 'User not found.');
                  }
              }
              public function delete($id)
              {
              
                  $users = UserBank::find($id);
              
              
                  if ($users) {
                      
                      $users->delete();
                      return redirect()->route('ShowUser')->with('success', 'User deleted successfully.');
                  } else {
                      
                      return redirect()->route('ShowUser')->with('error', 'User not found.');
                  }
              }
            }
              
              

 
         
         
         
        
            
 
                 





    


