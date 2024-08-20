@include('CRUD.layouts.master')
@include('CRUD.layouts.sidebar')
@include('CRUD.layouts.header')
<!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />



<!-- Content wrapper -->
<div style="margin-top: 100px;" class="content-wrapper ">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add Branch</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('insertData') }}" method="POST">
                            @csrf
                            
                            <!-- Bank Selection -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="bank-select">Bank</label>
                                    <select name="BankID" id="bank-select" class="form-select @error('BankID') is-invalid @enderror">
                                        <option value="" disabled selected>Select Bank</option>
                                        @foreach($banks as $bank)
                                            <option value=" {{$bank->BankId}}">{{$bank->Bankname }}</option>
                                        @endforeach
                                    </select>
                                    @error('BankID')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Branch Code -->
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-default-branchCode">Branch Code</label>
                                    <input type="number" name="BranchCode" value="{{old('BranchCode')}}"  class="form-control @error('BranchCode') is-invalid @enderror" maxlength="5" id="basic-default-branchCode" placeholder="Branch Code" />
                                    @error('BranchCode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Branch Name -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-default-branchName">Branch Name</label>
                                    <input type="text" name="BranchName" value="{{old('BranchName')}}" class="form-control @error('BranchName') is-invalid @enderror" maxlength="100" id="basic-default-branchName" placeholder="Branch Name" />
                                    @error('BranchName')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- City Selection -->
                                <div class="col-md-6">
                                    <label class="form-label" for="City-select">City</label>
                                    <select name="CityID" id="City-select" class="form-select @error('CityID') is-invalid @enderror">
                                        <option value="" disabled selected>Select City</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->CityName }}</option>
                                        @endforeach
                                    </select>
                                    @error('CityID')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                          <!-- Address Line -->
<div class="row mb-3">
    <div class="col-md-12">
        <label class="form-label" for="basic-default-company">Address Line</label>
   
        <input type="text" name="BranchAddress" class="form-control @error('BranchAddress') is-invalid @enderror" id="basic-default-company" placeholder="Address Line" value="{{ old('BranchAddress')}}  " />    



        @error('BranchAddress')

            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<!-- Submit Button -->
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<button type="submit" id="btnbranch" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    @include('CRUD.layouts.footer')
</div>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>