<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bank extends Model
{
    use HasFactory;
    protected $table = 'tbl_banks';
    protected $primaryKey = 'BankId'; 
    
    public function branches()
{
    return $this->hasMany(Branch::class, 'BankID', 'BankId');
}

    protected $fillable = [
        'Bankname',
        'Bankemail',
        'Bankcontact',
        'No_of_Employee',
        'NTN',
        'BankAddress',
        'Password',
        'Branches'
        
    ];
}


