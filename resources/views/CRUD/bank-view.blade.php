@include('CRUD.layouts.master')


@include('CRUD.layouts.sidebar')
@include('CRUD.layouts.header')



<style>
footer {
background-color: #f8f9fa;
padding: 10px;
margin-top: 500px;
text-align: center;
position: relative;
bottom: 0;
width: 100%;
}

</style>

<!-- Content wrapper -->
<div class="container my-4">
<div class="card">
<h5 class="card-header">Bank Records</h5>
<div class="card-body">
<div class="table-responsive">

<table class="table" >
<thead   >
<tr>
<th>First Name</th>

<th>Email</th>
<th>Contact</th>
<th>No Of Employee</th> 
<th>NTN</th>
<th>Address</th>
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
<td>{{ $bank->Password }}</td>

<td>
<!-- Edit button -->
<a href=" {{ url('editbank/'.$bank->BankId) }} " class="btn  btn-sm"><i style="font-size:20px;" class="fa-solid fa-pencil"></i></a>

</td>
<td>
<a href="{{url('/viewbank/'.$bank->BankId)}} "class="btn  btn-sm"><i style="font-size:20px;" class="fa-solid fa-info"></i></a>
</td>
<td>
<a href="{{url('bank/'.$bank->BankId)}}" class="btn btn-sm"><i style="font-size:18px;"  class="fa-solid fa-trash" onclick="return confirm('Are you sure you want to delete this branch?');"></i></a> 
</td>
</form>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@include('CRUD.layouts.footer')











