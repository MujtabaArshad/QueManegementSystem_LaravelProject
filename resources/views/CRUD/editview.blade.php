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
#card{
    margin-top: 50px;
}

</style>


@include('CRUD.layouts.master')
@include('CRUD.layouts.sidebar')
@include('CRUD.layouts.header')
<!-- Content wrapper -->
            

            <!-- Content wrapper -->
            <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Basic Layout -->
            <div id="card" class="row">
            <div class="col-xl">
            <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0"> View </h5>
            </div>
            <div class="card-body">
            <form action="" method="post">
            @csrf
            <div class="row">
            <!-- First Name -->
            <div class="col-6">
            <label class="form-label" for="first-name">First Name</label>
            <input type="text" name="FirstName" class="form-control" value="{{$viewuser->FirstName}}" id="first-name" placeholder="Enter First Name" disabled />
            </div>


            <!-- Last Name -->
            <div class="col-6">
            <label class="form-label" for="last-name">Last Name</label>
            <input type="text" name="LastName" class="form-control" value="{{$viewuser->LastName}}" id="last-name" placeholder="Enter Last Name" disabled />
            </div>
            </div>

            <div class="row mt-4">
            <!-- Email -->
            <div class="col-6">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="Email" class="form-control" value="{{$viewuser->Email}}" id="email" placeholder="Enter Email" disabled />
            </div>

            <!-- Address -->
            <div class="col-6">
            <label class="form-label" for="address">Address</label>
            <input type="text" name="Address" class="form-control" value="{{$viewuser->Address}}" id="address" placeholder="Enter Address"  disabled/>
            </div>
            </div>

        <div class="row mt-4">
        <!-- Age -->
        <div class="col-6">
        <label class="form-label" for="age">Age</label>
        <input type="number" name="Age" class="form-control" id="age" value="{{$viewuser->Age}}" placeholder="Enter Age" disabled />
        </div>
        <div class="col-6">
            <label class="form-label" for="age">CNIC</label>
            <input type="number" name="CNIC" class="form-control" id="age"  value="{{$viewuser->CNIC}}" placeholder="Enter CNIC" disabled />
            </div>
        </div>    
        <div class="row mt-4">
        <div class="col-6">
            <label class="form-label" for="age">Password</label>
            <input type="text" name="Password" class="form-control" value="{{$viewuser->Password}}" id="age" placeholder="Enter Password" disabled />
            
        </div>
        <!-- Gender -->
        
        <div class="col-6">
        <div class="mb-3">
        <label class="form-label" for="gender-select">Select Gender</label>
        <select name="Gender" id="gender-select" class="form-select" disabled>
        <option value="" disabled selected>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        </div>
        </div>
    </div>

        
    <div class="col-6">
        <div class="mb-3">
            <label class="form-label" for="role-select">Select Role</label>
            <select name="RoleID" id="role-select" class="form-select" disabled>
                <option value="" disabled selected>Select Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->RoleName }}</option>
                @endforeach
            </select>
        </div>
    </div>


        </div>
    
        <br>
        <br>


      

        </form>
        </div>
       
</div>

        </div>
</div>



         @include('CRUD.layouts.footer');