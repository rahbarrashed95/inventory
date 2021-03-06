@extends('main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ route('post.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">Add Post</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Admin List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->category->name }}</td>
                        <td>{{ $value->content }}</td>
                        <td class="action_btn">
                            {{ Form::open(['url' => "/admin/$value->id", 'method'=>'DELETE'])  }}
                            <button class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                            {{ Form::close()  }}
                            {{ Form::open(['url' => "/admin/$value->id/edit", 'method'=>'GET'])  }}
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
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection


