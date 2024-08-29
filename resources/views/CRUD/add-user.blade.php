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
        <h5 class="mb-0">Add User</h5>
        </div>
        <div class="card-body">
        <form id="user-form" action="{{ route('adduser') }}" method="post">
        @csrf
        <div class="row">
        <!-- First Name -->
        <div class="col-6">
        <label class="form-label" for="first-name">First Name *</label>
        <input type="text" name="FirstName" class="form-control @error('FirstName') is-invalid @enderror" id="first-name" placeholder="Enter First Name" value="{{ old('FirstName')}}  " />
        @error('FirstName')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        </div>

        <!-- Last Name -->
        <div class="col-6">
        <label class="form-label" for="last-name">Last Name *</label>
        <input type="text" name="LastName" class="form-control @error('LastName') is-invalid @enderror" id="last-name" placeholder="Enter Last Name" value="{{ old('LastName') }}" />
        @error('LastName')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        </div>

        <div class="row mt-4">
        <!-- Email -->
        <div class="col-6">
        <label class="form-label" for="email">Email *</label>
        <input type="email" name="Email" class="form-control @error('Email') is-invalid @enderror" id="email" placeholder="Enter Email" value="{{ old('Email') }}" />
        @error('Email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>

        <!-- Address -->
        <div class="col-6">
        <label class="form-label" for="address">Address *</label>
        <input type="text" name="Address" class="form-control @error('Address') is-invalid @enderror" id="address" placeholder="Enter Address" value="{{ old('Address') }}" />
        @error('Address')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        </div>

        <div class="row mt-4">
        <!-- Age -->
        <div class="col-6">
        <label class="form-label" for="age">Age *</label>
        <input type="number" min="0" name="Age" class="form-control @error('Age') is-invalid @enderror" id="age" placeholder="Enter Age" value="{{ old('Age') }}" />
        @error('Age')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <!-- NTN -->
        <div class="col-6">
        <label class="form-label" for="cnic">NTN *</label>
        <input type="number" name="NTN"   class="form-control @error('NTN') is-invalid @enderror" id="NTN" placeholder="Enter NTN" value="{{ old('NTN') }}" />
        @error('NTN')


        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        </div>

        <div class="row mt-4">
        <!-- Password -->
        <div class="col-6">
        <label class="form-label" for="password">Password *</label>
        <input type="password" name="Password" class="form-control @error('Password') is-invalid @enderror" id="password" value="{{old('Password')}}" placeholder="Enter Password" />
        @error('Password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <!-- Gender -->
        <div class="col-6">
        <div class="mb-3">
        <label class="form-label" for="gender-select">Select Gender *</label>
        <select name="Gender" id="gender-select" class="form-select @error('Gender') is-invalid @enderror">
        <option value="" disabled selected>Select Gender</option>
        <option value="Male" {{ old('Gender') == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female"{{old ('Gender') == 'Female' ? 'selected' : '' }}>Female</option>
        
        </select>
        @error('Gender')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        </div>
        </div>

        <div class="row mt-4">
        <!-- Role -->
        <div class="col-6">
        <div class="mb-3">
        <label class="form-label" for="role-select">Select Role *</label>
        <select name="RoleID" id="role-select" class="form-select @error('RoleID')is-invalid @enderror">
        <option value="" disabled selected>Select Role</option>
        @foreach($roles as $role)
        <option value="{{ $role->id }}" {{ old('RoleID') == $role->id ? 'selected' : '' }}>
        {{ $role->RoleName }}
    </option>

        @endforeach
        </select>
        @error('RoleID')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        </div>
        </div>

    

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
