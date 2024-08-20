
            <style>
            html, body {
            height: 100%;
            margin: 0;
            }

            body {
            display: flex;
            flex-direction: column;
           }

            #content {
            flex: 1;
            }

            footer {
            background-color: #f8f9fa;
            padding: 10px;
            margin-top: 500px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            }
        #card{
          margin-top:90px;
        }

            </style>

            @include('CRUD.layouts.master')
            @include('CRUD.layouts.sidebar')
            @include('CRUD.layouts.header')
          
            <div class="container my-4">
            <div id="card" class="card">
            <h5 class="card-header">Bank Records</h5>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped table-bordered">
            <thead>
            <tr>
            <th>Branch Name</th>
            <th>Branch Code</th>
            <th>Branch Address</th>
            <th>Bank ID</th>
            <th>City ID</th>
            <th>QR Code</th>
            <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            
              @foreach($branches as $branch)
              <tr>
              <td>{{ $branch->BranchName }}</td>
              <td>{{ $branch->BranchAddress }}</td>
              <td>{{ $branch->BranchCode }}</td>
              <td>{{ $branch->BankID }}</td>
              <td>{{ $branch->CityID }}</td> 
              <td>
              <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{urlencode(url('option/viewbranch?BranchCode='.$branch->BranchCode))}}" alt="QR Code">

              </td>
              <td>
              <a href="{{route('editData',$branch->BranchID) }}" class="btn btn-sm"><i style="font-size:20px;" class="fa-solid fa-pencil"></i></a>
              <a href=" {{route('vieweditbranch',$branch->BranchID)}}"class="btn  btn-sm"><i style="font-size:20px;" class="fa-solid fa-info"></i></a>
              <a href="{{route('delete',$branch->BranchID)}}" class="btn btn-sm"><i style="font-size:18px;"  class="fa-solid fa-trash" onclick="return confirm('Are you sure you want to delete this branch?');"></i></a> 

              </td>
              </tr>
              @endforeach
              </tbody>
              </table>
              </div>
              </div>
              </div>
            

              @include('CRUD.layouts.footer')


                          










