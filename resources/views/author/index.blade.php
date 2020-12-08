@extends('main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Author List</h1>
        <a href="{{ route('author.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">Add New Author</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Author List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($authors as $key => $author)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td>{{ $author->password }}</td>
                        <td>{{ $author->address }}</td>
                        <td><img src="{{  ($author->photo == null) ? asset('Admin_Panel/admin/default.jpg') : URL::to($author->photo) }}" style="height: 50px;width: 50px;"/></td>
                        <td class="action_btn">
                            {{-- Button: Delete --}}
                            {{ Form::open(['url' => "author/$author->id", 'method'=>'DELETE'])  }}
                            <button class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                            {{ Form::close()  }}
                            {{ Form::open(['url' => "/admin/$author->id/edit", 'method'=>'GET'])  }}
                            <button class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                            {{ Form::close()  }}
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection


