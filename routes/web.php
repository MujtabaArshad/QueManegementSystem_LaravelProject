<?php
use App\Http\Controllers\AdminDashboard\AdminController;
use App\Http\Controllers\AdminDashboard\BankController;
use App\Http\Controllers\AdminDashboard\BranchController;
use App\Http\Controllers\AdminDashboard\BankuserController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\AdminDashboard\LoginController;
use App\Http\Controllers\QRcodeController;
use Illuminate\Support\Facades\Route;

// Admin Login 
// guest middlewar
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::get('/registration', [LoginController::class, 'Register'])->name('account.register');
    Route::post('/process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
});

    // Authentiated Middleware
Route::group(['middleware'=>'auth'],function(){
 Route::get('/account/logout',[LoginController::class,'logout'])->name('account.logout');
 Route::get('/Dashboard/Admin',[AdminController::class, 'AdminDasbhoard'])->name('dashboard');
});

// Add bank form
Route::get('/bank', [BankController::class, 'showForm'])->name('bank');
Route::post('/bank/inserform', [BankController::class, 'insertData'])->name('insertForm');
Route::get('bank/view',[BankController::class,'viewAll'])->name('allbank');




// edit bank
Route::get('editbank/{id}', [BankController::class, 'editData'])->name('editData');
Route::post('/update-bank/{id}', [BankController::class, 'updateData'])->name('updateBank');
// delete bank
Route::GET('bank/{id}', [BankController::class, 'delete']);


Route::get('/viewbank/{id}',[BankController::class,'viewbank'])->name('viewbankedit');

// AddBranches
Route::get('AddBranches', [BranchController::class, 'showForm'])->name('addbranch');
Route::post('AddBranches',[BranchController::class,'insertData'])->name('insertData');

// view branch
Route::get('viewbranches', [BranchController::class, 'viewData'])->name('viewData');
// edit branch

Route::get('editbranch/{id}', [BranchController::class, 'editData'])->name('editData');
Route::post('editbranch/{id}', [BranchController::class, 'updateData']);

// editview branch

Route::get('/view/edit/branch/{id}',[BranchController::class,'vieweditbranches'])->name('vieweditbranch');
Route::get('branch/{id}', [BranchController::class, 'delete'])->name('delete');


// bank user
Route::get('adduser', [BankuserController::class, 'adduser'])->name('adduser');
Route::post('adduser', [BankuserController::class, 'insertData'])->name('adduser');
Route::get('viewuser',[BankuserController::class,'ShowUser'])->name('ShowUser');

// editview
Route::get('view/{id}',[BankuserController::class,'Editview'])->name('editview');
Route::get('edituser/{id}',[BankuserController::class,'edituser'])->name('EditUser');
Route::post('edituser/{id}', [BankuserController::class, 'updateData']);
Route::get('deleteuser/{id}', [BankuserController::class, 'delete'])->name('userdelete');




Route::post('import', [ExcelController::class, 'import'])->name('import');


Route::get('option',[QRcodeController::class,'branchOptions'])->name('Branchoptions');
Route::get('option/viewbranch', [QRcodeController::class, 'branchOptions'])->name('branchoptions');


// <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{ rawurlencode('http://10.0.115.92:8001/viewbranch?BranchCode=' . $branch->BranchCode . '&option=' . route('Branchoptions')) }}" alt="QR Code">
