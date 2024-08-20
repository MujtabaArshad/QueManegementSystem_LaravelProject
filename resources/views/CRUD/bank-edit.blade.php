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
            <h5 class="mb-0">Edit Bank</h5>
            </div>
            <div class="card-body">
            <form action="{{route('updateBank',$banks->BankId)}}" method="post">
            @csrf
            <div class="row">
            <!-- First Name -->
            <div class="col-6">
            <label class="form-label" for="first-name">First Name</label>
            <input type="text" name="Bankname" class="form-control" value="{{$banks->Bankname}}"  id="first-name" placeholder="Enter First Name" />
            </div>


            <!-- Last Name -->
            <div class="col-6">
            <label class="form-label" for="last-name">Email</label>
            <input type="text" name="Bankemail" class="form-control" value="{{$banks->Bankemail}}" id="last-name" placeholder="Enter Email" />
            </div>
            </div>

            <div class="row mt-4">
            <!-- Email -->
            <div class="col-6">
            <label class="form-label" for="email">Contact</label>
            <input type="text" name="Bankcontact" class="form-control" value="{{$banks->Bankcontact}}" id="contact" placeholder="Enter Contact" />
            </div>

            <!-- Address -->
            <div class="col-6">
            <label class="form-label" for="address">No of employee</label>
            <input type="text" name="No_of_Employee" class="form-control" value="{{$banks->No_of_Employee}}" id="No_of_Employee" placeholder="Enter No_of_Employee" />
            </div>
            </div>

        <div class="row mt-4">
        <!-- Age -->
        <div class="col-6">
        <label class="form-label" for="age">NTN</label>
        <input type="number" name="NTN" class="form-control" id="NTN" value="{{$banks->NTN}}" placeholder="Enter NTN" />
        </div>


        <div class="col-6">
            <label class="form-label" for="Address">Address</label>
            <input type="text" name="BankAddress" class="form-control" value="{{$banks->BankAddress}}" id="Address" placeholder="Enter Address" />
            
        </div>
        
        <div class="row mt-4">
        <div class="col-6">
            <label class="form-label" for="password">Password</label>
            <input type="text" name="Password" class="form-control" value="{{$banks->Password}}" id="Bankpassword" placeholder="Enter Password" />
            
        </div>
   
        <div class="row mt-4">
        <div class="col-6">
            <label class="form-label" for="password">Branches</label>
            <input type="text" name="Branches" class="form-control" value="{{$banks->Branches}}" id="Branches" placeholder="Enter Branches "/>
            
        </div>
   

        

        <!-- Submit Button -->
        <div style="margin-top:40px; margin-left:10px;" class="text-start mb-4  ">

        <button type="submit" class="btn btn-primary">Edit</button>
   
        </div>

        </form>
        </div>
       
</div>

        </div>
</div>
</div>
</div>
</div>


@include('CRUD.layouts.footer')