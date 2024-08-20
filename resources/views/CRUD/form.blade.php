      
      @include('CRUD.layouts.master')
      @include('CRUD.layouts.sidebar')
      @include('CRUD.layouts.header')
      
      
      
      <style>

      .content-wrapper {
      position: relative;
      }

      .button-container {
      position: absolute; 
      right: 0;
      top: 0; 
      margin-top: 20px; 
      margin-left: 520px;
      margin-right: 20px;
      }


      </style>
      
      
      <!-- Content wrapper -->


      <div class="content-wrapper">

      <!-- First Navbar -->
      <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">

      </a>
      </div>


      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center" style="margin-top:15px;">
      <div class="nav-item d-flex align-items-center">
      <h4> <strong> Bank Registration </strong> </h4>
      </div>
      </div>

      </div>
 <button style="width: 150px"type="button"class="btn btn-primary"data-bs-toggle="modal"data-bs-target="#largeModal"><i class="fa-solid fa-plus me-2"></i>   Add New</button></nav></div>
 

      <!-- Display Table -->
      <div  class="container my-4">
      <div style="margin-bottom: 500px;" class="card">
      <h5 class="card-header">Bank Records</h5>
<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>Bank Name</th>
                <th>BankEmail</th>
                <th>BankContact</th>
                <th>No of Employees</th>
                <th>NTN</th>
                <th>BankAddress</th>
                <th>Password</th>
                <th>Branches</th>
                <th>Actions</th> 
              
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach($banks as $bank)
            <tr>
                <td>{{ $bank->Bankname }}</td>
                <td>{{ $bank->Bankemail }}</td>
                <td>{{ $bank->Bankcontact }}</td>
                <td>{{ $bank->No_of_Employee }}</td>
                <td>{{ $bank->NTN }}</td>
                <td>{{ $bank->BankAddress }}</td>
                <td>{{$bank->Password}}</td>
                <td>{{ $bank->Branches }}</td>

                <td>
    <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-id="{{ $bank->BankID }}">
        <i class="fa-solid fa-pencil"></i>
    </button>

    <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editviewModal" data-id="{{ $bank->BankID }}">
        <i   style="font-size:15px;"  class="fa-solid fa-info"></i>
    </button>
    <a href="{{url('bank/'.$bank->BankId)}}" class="btn btn-sm"><i style="font-size:14px; margin-left:20px;"  class="fa-solid fa-trash" onclick="return confirm('Are you sure you want to delete this bank ?');"></i></a> 
    </td>
   </td>
   </tr>
 @endforeach     </tbody>
    </table>
</div>



      <form  id="AddForm" action="{{route('insertForm')}}"  method="POST">
      @csrf
      <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel3">Bank Details</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
      <div class="col-6 mb-3">
      <label for="nameLarge" class="form-label">Name</label>
      <input type="text" id="nameLarge" name="Bankname"  value="{{old('Bankname')}}"  class="form-control @error('Bankname') is-invalid @enderror " placeholder="Enter Name"/>
      
      @error('Bankname')
      <div class="invalid-feedback">{{ $message }}</div>
                                
      @enderror
      
      </div>
      <div class="col-6 mb-3">
      <label for="emailLarge" class="form-label">Email</label>
      <input type="text" id="emailLarge" name="Bankemail" value="{{old('Bankemail')}}"  class="form-control @error('Bankemail') is-invalid @enderror " placeholder="Enter Your Email" />
      @error('Bankemail')
      <div class="invalid-feedback">{{ $message }}</div>
                                
      @enderror
      </div>
      </div>
      <div class="row mb-3">
      <div class="col-6 mb-3">
      <label for="contactNoLarge" class="form-label">Contact No</label>
      <input type="text" id="contactNoLarge" name="Bankcontact" value="{{old('Bankcontact')}}"   class="form-control @error('Bankcontact') is-invalid @enderror " placeholder="Enter Contact No" />
      @error('Bankcontact')
      <div class="invalid-feedback">{{ $message }}</div>
                                
      @enderror
      </div>
  
    
      <div class="col-6 mb-3">
      <label for="numberOfEmployees" class="form-label">Number of Employees</label>
      <input type="number" id="numberOfEmployees" name="No_of_Employee" value="{{old('No_of_Employee')}}" class="form-control @error('No_of_Employee') is-invalid @enderror " placeholder="Enter Number of Employees"  />
      @error('No_of_Employee')
      <div class="invalid-feedback">{{ $message }}</div>
                                
    @enderror

      </div>
      </div>
      <div class="row mb-3">
      <div class="col-6 mb-3">
      <label for="cnicLarge" class="form-label">NTN</label>
      <input type="number" id="cnicLarge" name="NTN"  value="{{old('NTN')}}" class="form-control @error('NTN') is-invalid @enderror" placeholder="Enter NTN" />
      @error('NTN')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror


      </div>

     
      <div class="col-6 mb-3">
      <label for="bankAddressLarge" class="form-label">Bank Address</label>
      <input type="text" id="bankAddressLarge" name="BankAddress" value="{{old('BankAddress')}}" class="form-control @error('BankAddress') is-invalid @enderror " placeholder="Enter Bank Address"/>
         @error('BankAddress')

         <div class="invalid-feedback">{{$message}}</div>

         @enderror
      </div>
      </div>

      <div class="row mb-3">
      <div class="col-6 mb-3">
      <label for="bankPasswordLarge" class="form-label">Bank Password</label>
      <input type="password" id="bankPasswordLarge" name="Password"  value="{{old('Password')}}" class="form-control @error('Password') is-invalid @enderror " placeholder="Enter Bank Password"  />
      @error('Password')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
      </div>
      

     
      <div class="col-6 mb-3">
      <label for="bankBranchesLarge" class="form-label">Bank Branches</label>
      <input type="number" id="bankBranchesLarge" name="Branches"   value="{{old('Branches')}}" class="form-control @error('Branches') is-invalid @enderror" placeholder="Enter Number of Branches" />
      @error('Branches')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
      </div>
     
      </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </div>
      </div>
      </div>
      </form>
      </div>
      </div>


    
</script>
      @if(isset($bank))
    <form action="{{  $bank->BankID }}" method="POST">
        @csrf
        

        <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Bank Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Name</label>
                                <input type="text" id="nameLarge" name="Bankname" value="{{ $bank->Bankname }}" class="form-control " placeholder="Enter Name"/>
                              
                            </div>
                            <div class="col-6 mb-3">
                                <label for="emailLarge" class="form-label">Email</label>
                                <input type="text" id="emailLarge" name="Bankemail" value="{{ $bank->Bankemail }}" class="form-control" placeholder="Enter Your Email" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="editContact" class="form-label">Contact No</label>
                                <input type="text" id="editContact" name="Bankcontact" value="{{ $bank->Bankcontact }}" class="form-control" placeholder="Enter Contact No" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="editEmployees" class="form-label">Number of Employees</label>
                                <input type="number" id="editEmployees" name="No_of_Employee" value="{{ $bank->No_of_Employee }}" class="form-control" placeholder="Enter Number of Employees" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="cnicLarge" class="form-label">CNIC</label>
                                <input type="text" id="cnicLarge" name="CNIC" value="{{ $bank->CNIC }}" class="form-control" placeholder="Enter CNIC" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="editAddress" class="form-label">Bank Address</label>
                                <input type="text" id="editAddress" name="BankAddress" value="{{ $bank->BankAddress }}" class="form-control" placeholder="Enter Bank Address" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="bankPasswordLarge" class="form-label">Bank Password</label>
                                <input type="password" id="bankPasswordLarge" name="Password" value="{{ $bank->Password }}" class="form-control" placeholder="Enter Bank Password" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="bankBranchesLarge" class="form-label">Bank Branches</label>
                                <input type="number" id="bankBranchesLarge" name="Branches" value="{{ $bank->Branches }}" class="form-control" placeholder="Enter Number of Branches" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit Records</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@else
    <p>No bank data found.</p>
@endif


<!-- viewdata -->

@if(isset($bank))
    <form action="{{  $bank->BankID }}" method="POST">
        @csrf
        

        <div class="modal fade" id="editviewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">View</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Name</label>
                                <input type="text" id="nameLarge" name="Bankname" disabled value="{{ $bank->Bankname }}" class="form-control" placeholder="Enter Name"/>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="emailLarge" class="form-label">Email</label>
                                <input type="text" id="emailLarge" name="Bankemail" disabled value="{{ $bank->Bankemail }}" class="form-control" placeholder="Enter Your Email" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="editContact" class="form-label">Contact No</label>
                                <input type="text" id="editContact" name="Bankcontact" disabled value="{{ $bank->Bankcontact }}" class="form-control" placeholder="Enter Contact No" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="editEmployees" class="form-label">Number of Employees</label>
                                <input type="number" id="editEmployees" name="No_of_Employee" disabled value="{{ $bank->No_of_Employee }}" class="form-control" placeholder="Enter Number of Employees" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="cnicLarge" class="form-label">CNIC</label>
                                <input type="text" id="cnicLarge" name="CNIC" disabled value="{{ $bank->CNIC }}" class="form-control" placeholder="Enter CNIC" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="editAddress" class="form-label">Bank Address</label>
                                <input type="text" id="editAddress" name="BankAddress" disabled value="{{ $bank->BankAddress }}" class="form-control" placeholder="Enter Bank Address" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 mb-3">
                                <label for="bankPasswordLarge" class="form-label">Bank Password</label>
                                <input type="password" id="bankPasswordLarge" disabled name="Password" value="{{ $bank->Password }}" class="form-control" placeholder="Enter Bank Password" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="bankBranchesLarge" class="form-label">Bank Branches</label>
                                <input type="number" id="bankBranchesLarge"  disabled name="Branches" value="{{ $bank->Branches }}" class="form-control" placeholder="Enter Number of Branches" />
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </form>
@else
    <p>No bank data found.</p>
@endif









@include('CRUD.layouts.footer')