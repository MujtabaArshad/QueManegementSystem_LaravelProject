<?php
namespace App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;

use Illuminate\Validation\Rule;


class BankController extends Controller
{

    public function showForm()
    {
      return view('CRUD.bank');  
        
    }
    public function insertData(Request $req)
    {
        $req->validate([
            'Bankname' => 'required|string|max:255',
            'Bankemail' => 'required|email|unique:tbl_banks,Bankemail',
            'Bankcontact' => 'required|digits:11',
            'No_of_Employee' => 'required|integer',
            'NTN' => 'required|digits:13|unique:tbl_banks,NTN',
            'BankAddress' => 'required|string|max:255',
            'Password' => 'required|string|min:6',
            'Branches' => 'required|integer',
        ]);
        


            $insData = new Bank();
            $insData->Bankname = $req->Bankname;
            $insData->Bankemail = $req->Bankemail;
            $insData->Bankcontact = $req->Bankcontact;
            $insData->No_of_Employee = $req->No_of_Employee;
            $insData->NTN = $req->NTN;
            $insData->BankAddress = $req->BankAddress;
            $insData->Password = bcrypt($req->Password);
            $insData->Branches = $req->Branches;
            $insData->save();
    
        return redirect()->route('allbank')->with('success', 'Bank registered successfully.');
    }
    
 
       
    public function viewAll(){
        $banks=Bank::all();
        return view('CRUD.bank-view',compact('banks'));
    }




    public function delete($BankId)
    {
        $bank = Bank::find($BankId);
    
        if ($bank) {
            $bank->delete();
            return redirect()->route('allbank')->with('success', 'Bank record deleted successfully.');
        } else {
            return redirect()->route('allbank')->with('error', 'Bank record not found.');
        }
       
    }


    public function editData($BankId)
    {
        $banks = Bank::find($BankId);
    
        
        return view('CRUD.bank-edit', compact('banks'));
    }
    public function   viewbank($BankId)
    {
        $banks = Bank::find($BankId);
    
        
        return view('CRUD.bank-view-edit', compact('banks'));
        
    }



    


public function updateData(Request $req,$BankId)
{
    
    $updateData=Bank::find($BankId);
    if($updateData){
        $updateData->Bankname=$req->Bankname;
        $updateData->Bankemail=$req->Bankemail;
        $updateData->Bankcontact=$req->Bankcontact;
        $updateData->No_of_Employee=$req->No_of_Employee;
        $updateData->NTN = $req->NTN;
           $updateData->BankAddress = $req->BankAddress;

        $updateData->Password = $req->Password ? bcrypt($req->Password) : $updateData->Password;

        $updateData->Branches = $req->Branches;
        $updateData->save();

    }
    return redirect()->route('allbank')->with('success', 'Bank updated successfully.');
        } 
    
  

    // public function updateData(Request $req, $BankId)
    // {
    //     // Validate the request
    //     $req->validate([
    //         'Bankname' => 'required|string|max:255',
    //         'Bankemail' => [
    //             'required',
    //             'email',
    //             Rule::unique('tbl_banks', 'Bankemail')->ignore($BankId, 'BankId'), 
    //         ],
    //         'Bankcontact' => 'required|size:12|numeric',
    //         'No_of_Employee' => 'required|integer',
    //         'NTN' => 'required|size:13|numeric',
    //         'BankAddress' => 'required|string|max:255',
    //         'Password' => 'nullable|string|min:6',
    //         'Branches' => 'required|integer',
    //     ]);
    
    //     // Find the bank record
    //     $UpdataBank = Bank::find($BankId);
    
    //     if ($UpdataBank) {
    //         // Update the record
    //         $UpdataBank->Bankname = $req->Bankname;
    //         $UpdataBank->Bankemail = $req->Bankemail;
    //         $UpdataBank->Bankcontact = $req->Bankcontact;
    //         $UpdataBank->No_of_Employee = $req->No_of_Employee;
    //         $UpdataBank->NTN = $req->NTN;
    //         $UpdataBank->BankAddress = $req->BankAddress;
    //         $UpdataBank->Password = $req->Password ? bcrypt($req->Password) : $UpdataBank->Password;
    //         $UpdataBank->Branches = $req->Branches;
    //         $UpdataBank->save();
    
    //         return redirect()->route('allbank')->with('success', 'Bank updated successfully.');
    //     } else {
    //         return redirect()->route('allbank')->with('error', 'Bank not found.');
    //     }
    // }
    

//   public function updateData(Request $req, $BankId)
//     {
//         $req->validate([
//             'Bankname' => 'required|string|max:255',
//             'Bankemail' => [
//                 'required','email',
//                 Rule::unique('tbl_banks', 'Bankemail')->ignore($BankId),
                
//             ],
//             'Bankcontact' => 'required|size:12|numeric',
//             'No_of_Employee' => 'required|integer',
//             'NTN' => 'required|size:13|numeric',
//             'BankAddress' => 'required|string|max:255',
//             'Password' => 'nullable|string|min:6',
//             'Branches' => 'required|integer',
//         ]);
    
//         $UpdataBank = Bank::find($BankId);
  
    
//         if ($UpdataBank) {
//             $UpdataBank->Bankname = $req->Bankname;
//             $UpdataBank->Bankemail = $req->Bankemail;
//             $UpdataBank->Bankcontact = $req->Bankcontact;
//             $UpdataBank->No_of_Employee = $req->No_of_Employee;
//             $UpdataBank->NTN = $req->NTN;
//             $UpdataBank->BankAddress = $req->BankAddress;
//             $UpdataBank->Password = $req->Password ? bcrypt($req->Password) : $UpdataBank->Password;
//             $UpdataBank->Branches = $req->Branches;
//             $UpdataBank->save();
//             return redirect()->route('bank')->with('success', 'Bank updated successfully.');
//         } else {
//             return redirect()->route('bank')->with('error', 'Bank not found.');
//         }
//     }
}