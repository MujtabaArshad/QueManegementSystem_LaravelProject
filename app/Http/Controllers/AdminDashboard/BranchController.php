<?php

namespace App\Http\Controllers\AdminDashboard;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\City;

class BranchController extends Controller
{
    
    
// public function index()
// {
//     $branches = Branch::all();
//     // $branches = $this->viewData(); 
//     return view('CRUD.view-branches', compact('branches'));
// }


//     public function viewData()
// {
//         $branches = Branch::all();
//     // $branches = Branch::with(['bank', 'city'])->get();
//     return view('CRUD.view-branches', compact('branches'));
// }

    // public function viewData()
    // {
    //     $branches = DB::table('tbl_branches')
    //         ->join('cities', 'tbl_branches.CityID', '=', 'cities.id')
    //         ->join('tbl_banks', 'tbl_branches.BankID', '=', 'tbl_banks.BankId')
    //         ->select('tbl_branches.*', 'cities.CityName', 'tbl_banks.Bankname')
    //         ->get();

    //     return $branches;
    // }

    public function viewData()
    {
       $branches = Branch::all();
     return view('CRUD.view-branches', compact('branches')); 
    }

    
    public function showForm()
    {
        $banks = Bank::all(); 
        $cities = City::all();
        $branches = Branch::all(); 
    
        return view('CRUD.add-branches', compact('banks', 'cities', 'branches'));    
    }
    
    public function insertData(Request $req)
{
    $validated = $req->validate([
        'BranchName' => 'required|max:100',
        'BranchCode' =>'required|max:5',
        'BankID'=>'required',
        'CityID'=>'required|exists:cities,id',
        'BranchAddress' => 'required',
    ]);

    $insData = new Branch();
    $insData->BranchCode = $req->BranchCode;
    $insData->BranchName = $req->BranchName;
    $insData->BankID = $req->BankID;
    $insData->CityID = $req->CityID;
    $insData->BranchAddress = $req->BranchAddress;
    $insData->save();
    


    
    return redirect()->route('viewData')->with('message', 'Branch added successfully!');
}

  
    public function viewBranch()
{
    $banks = Bank::all();
    return view('CRUD.view-branches', compact('banks'));
}


public function vieweditbranches($id)
{
    $branch = Branch::find($id); 
    return view('CRUD.view-edit-branch', compact('branch'));
}

public function editData($BranchID)
{
    $branch = Branch::find($BranchID);
    return view('CRUD.edit-branch', compact('branch'));
}

public function updateData(Request $req, $BranchID)
{
    $updateData = Branch::find($BranchID);

    if ($updateData) {
        $updateData->Branchname = $req->BranchName;
        $updateData->BranchCode = $req->BranchCode;
        $updateData->BranchAddress = $req->BranchAddress;
        $updateData->save();
        return redirect()->route('viewData')->with('success', 'Branch updated successfully.');
        } else {
        return redirect()->route('viewData')->with('error', 'Branch not found.');
        }
        }
        


// editview



    

    
   

    


public function delete($BranchID)
{
    $branch = Branch::find($BranchID);

    
    if ($branch) {
    
        $branch->delete();
        return redirect()->route('viewData')->with('success', 'Branch deleted successfully.');
    } else {
        
        return redirect()->route('viewData')->with('error', 'Branch not found.');
    }
}
}











