@extends('app')
@section('content')
    <div class="container">
        <a href="/teacher" class="btn btn-primary btn-sm my-2">Back</a>
        <div class="row">
            <form action="/teacher" method="post">
                @csrf
                <div class="my-2">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}">
                </div>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input id="mobile" class="form-control" type="text" name="mobile" value="{{ old('mobile') }}">
                </div>
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <label for="faculty_id">Faculty</label>
                    <select id="faculty_id" class="form-control" name="faculty_id">
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-sm my-2">Save Record</button>
            </form>
        </div>
    </div>

@endsection
