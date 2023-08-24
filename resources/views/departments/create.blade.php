@extends('app')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div style="margin-bottom: 1em;">
<a href="{{  route('departments.index') }}">Department List</a>

</div>

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1 class="card-header text-center">Create Department</h1>
                    <div class="card-body">
                        <form action="{{ route('departments.create') }}" method="post">
                            @csrf
                            <div style="margin-bottom: 1em;">
                                <label for="name">Name</label>
                                <input class="Form-control" type="text" name="name" id="name" placeholder="enter department">
                                @error('name')
                                <div style="color: red">{{ route($massage) }}</div>
                                @enderror
                            </div>
                            @if(session('message'))
                                <div style="color: green">{{ session('message') }}</div>
                            @endif

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-secondary" type="submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
</main>


