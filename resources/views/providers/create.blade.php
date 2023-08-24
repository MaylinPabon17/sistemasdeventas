@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <div style="margin-bottom: 1em;">
    <a href="{{  route('providers.index') }}">Provider List</a>

</div>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Create Provider</h1>
                        <div class="card-body">
                            <form action="{{ route('providers.create') }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Name</label>
                                    <input class="Form-control" type="text" name="name" id="name" placeholder=" name" value="{{ old('name') }}">
                                    @error('name')
                                    <div style="color: red">{{ route($message) }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="lastname">Lastname</label>
                                    <input class="Form-control" type="text" name="lastname" id="lastname" placeholder=" lastname" value="{{ old('lastname') }}">
                                    @error('lastname')
                                    <div style="color: red">{{ route($massage) }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Document</label>
                                    <input class="Form-control" type="text" name="document" id="document" placeholder=" document" value="{{ old('document') }}">
                                    @error('document')
                                    <div style="color: red">{{ route($message) }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Email</label>
                                    <input class="Form-control" type="text" name="email" id="email" placeholder=" email" value="{{ old('email') }}">
                                    @error('email')
                                    <div style="color: red">{{ route($message) }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Phone</label>
                                    <input class="Form-control" type="text" name="phone" id="phone" placeholder=" phone" value="{{ old('phone') }}">
                                    @error('phone')
                                    <div style="color: red">{{ route($message) }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Address</label>
                                    <input class="Form-control" type="text" name="address" id="address" placeholder=" address" value="{{ old('address') }}">
                                    @error('address')
                                    <div style="color: red">{{ route($message) }}</div>
                                    @enderror
                                </div>


                                <div style="margin-bottom: 1em;">
                                    <label for="city_id">City</label>
                                    <select class="Form-control" name="city_id" id="city_id">
                                        <option value="">Select</option>
                                        @foreach($cities as $city)
                                            <option
                                                @if($city->id === (int)old('city_id'))
                                                    selected
                                                @endif
                                                value="{{ $city->id }}">{{ $city->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('city_id')
                                    <div style="color: red;">{{ $message }}</div>
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





