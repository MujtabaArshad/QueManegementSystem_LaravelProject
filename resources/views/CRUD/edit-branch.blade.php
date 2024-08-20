



@include('CRUD.layouts.master')
@include('CRUD.layouts.sidebar')
@include('CRUD.layouts.header')






          <div class="content-wrapper mt-5">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
          

          <!-- Basic Layout -->
          <div class="row">
          <div class="col-xl">
          <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Edit Branch</h5>

          </div>
          <div class="card-body">
          <form action="" method="post" >
          @csrf
          <div class="row">
          <div class="col-6">

<label class="form-label" for="basic-default-fullname">Branch Name</label>
<input type="text" name="BranchName" class="form-control" value="{{ $branch->BranchName }}"  id="basic-default-fullname" placeholder="Branch Name" />

          </div>

<div class="col-6">

<label class="form-label" for="basic-default-company">Branch Address</label>
<input type="text" name="BranchAddress" class="form-control" value="{{ $branch->BranchAddress }}"id="basic-default-company" placeholder="Branch Address" />

          </div>
          </div>


          <div class="row mt-4">
          <div class="col-6">

          <label class="form-label" for="basic-default-fullname">Branch Code</label>
          <input type="text" name="BranchCode"  value="{{ $branch->BranchCode }}" class="form-control" id="basic-default-fullname" placeholder="Branch Code" />
          

          </div>

          </div>

          <br><br>
          <button type="submit" class="btn btn-primary">Edit</button>
          </form>
          </div>
          </div>
          </div>








          </div>


</div>




@include('CRUD.layouts.footer')