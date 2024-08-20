@include('CRUD.layouts.master')
        @include('CRUD.layouts.sidebar')
        @include('CRUD.layouts.header')

        <!-- Toastr CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- Content wrapper -->
        <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div id="card" class="row">
        <div class="col-xl">
        <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Bank Details</h5>
        </div>
        <div class="card-body">
        <form id="user-form" action="{{ route('insertForm') }}" method="post">
        @csrf
        <div class="row mt-4">
        <!-- First Name -->
        <div class="col-6">
        <label class="form-label" for="first-name">First Name *</label>
        <input type="text" name="Bankname"   class="form-control @error('Bankname') is-invalid @enderror " placeholder="Enter Name "  value="{{old('Bankname')}}" />

        @error('Bankname')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        </div>
  
        <!-- Last Name -->
       
        <div class="col-6">
        <label class="form-label" for="last-name">Email *</label>
        <input type="text" name="Bankemail" class="form-control @error('Bankemail') is-invalid @enderror" id="Bankemail" placeholder="Enter Email" value="{{ old('Bankemail') }}" />
        @error('Bankemail')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
</div>

        
 <div class="row mt-4">
        <!-- Address -->
        <div class="col-6">
        <label class="form-label" for="address">Contact *</label>
        <input type="text" name="Bankcontact" class="form-control @error('Bankcontact') is-invalid @enderror" id="address" placeholder="Enter Your Number" value="{{ old('Bankcontact') }}" />

        @error('Bankcontact')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        

      
        <!-- Employee -->
        <div class="col-6">
        <label class="form-label" for="age">Number of Employees *</label>
<input ype="number"  name="No_of_Employee" class="form-control @error('No_of_Employee') is-invalid @enderror" id="No_of_Employee"
 placeholder="Enter Age" value="{{ old('No_of_Employee') }}" />
        @error('No_of_Employee')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
</div>
        
        <!-- NTN -->
<div class="row mt-4">
        <div class="col-6">
        <label class="form-label" for="cnic">NTN *</label>
        <input type="number" name="NTN"   class="form-control @error('NTN') is-invalid @enderror" id="NTN" placeholder="Enter NTN" value="{{ old('NTN') }}" />
        @error('NTN')

        
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        

       
        <!-- Password -->
        <div class="col-6">
        <label class="form-label" for="BankAddress">Address *</label>
        <input type="password" name="BankAddress" class="form-control @error('BankAddress') is-invalid @enderror" id="BankAddress" value="{{old('BankAddress')}}" placeholder="Enter Address" />
        @error('BankAddress')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="row mt-4">
        <!-- password -->
        <div class="col-6">
        <label class="form-label" for="BankAddress">Password *</label>
        <input type="password" name="Password" class="form-control @error('Password') is-invalid @enderror" id="Password" value="{{old('Password')}}" placeholder="Enter Password" />
        @error('Password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        
</div>

<div class="col-6">
        <label class="form-label" for="Branches">Branches *</label>
        <input type="Branches" name="Branches" class="form-control @error('Branches') is-invalid @enderror" id="Branches" value="{{old('Branches')}}" placeholder="Enter Branches" />
        @error('Branches')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>

        </div>

    <br><br>

        <!-- Submit Button -->
        <div class="text-start mb-5">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>


        @include('CRUD.layouts.footer')
