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
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Age</th> 
            <th>NTN</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($users as $user)
            <tr>
            <td>{{ $user->FirstName }}</td>
            <td>{{ $user->LastName }}</td>
            <td>{{ $user->Email }}</td>
            <td>{{ $user->Address }}</td>
            <td>{{ $user->Age }}</td>
            <td>{{ $user->NTN }}</td>
            <td>{{ $user->Password }}</td>
            <td>{{ $user->Gender }}</td>
            <td>{{ $user->RoleID }}</td>
            <td>
            <!-- Status Toggle Switch -->
            <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="statusSwitch->{{ $user->id }}" data-on="1" data-off="0" {{ $user->status ? 'checked' : '' }} onchange="toggleStatus({{ $user->id }}, this.checked ? 1 : 0)">
            <label class="form-check-label" for="statusSwitch-{{ $user->id }}">
            {{ $user->status ? 'Active' : 'Inactive' }}
            </label>
        </div>
    </td>
    <td>
    <!-- Edit button -->
    <a href=" {{ route('EditUser', $user->id) }} " class="btn  btn-sm"><i style="font-size:20px;" class="fa-solid fa-pencil"></i></a>

    </td>
    <td>
        <a href="{{ route('editview', $user->id) }} "class="btn  btn-sm"><i style="font-size:20px;" class="fa-solid fa-info"></i></a>
    </td>
    <td>
    <a href="{{url('deleteuser/'.$user->id)}}" class="btn btn-sm"><i style="font-size:18px;"  class="fa-solid fa-trash" onclick="return confirm('Are you sure you want to delete this branch?');"></i></a> 
    </td>
</form>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
@include('CRUD.layouts.footer')
        



    







