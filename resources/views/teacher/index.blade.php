@extends('app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/teacher/create" class="btn btn-primary btn-sm my-2">Add Button</a>
            </div>
            <div class="card-body">
                <table class="table table-light" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Faculty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $index => $teacher)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->mobile }}</td>
                                <td>{{ $teacher->faculty->name }}</td>
                                <td>
                                    <form action="/teacher/{{ $teacher->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="" class="badge bg-primary text-decoration-none">Edit</a>
                                        <button type="submit" class="btn badge bg-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
