@extends('app')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <div style="margin-bottom: 1em;">
    <a href="{{ route('providers.index') }}">Provider List</a>
</div>

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit Provider</h1>
                        <div class="card-body">
                            <form action="{{ route('providers.edit', $provider) }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Name</label>
                                    <input class="Form-control"  type="text" name="name" id="name" placeholder="Enter client" value="{{ $provider->name }}">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Lastname</label>
                                    <input class="Form-control" type="text" name="lastname" id="lastname" placeholder="Enter lastname" value="{{ $provider->lastname }}">
                                    @error('lastname')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Document</label>
                                    <input class="Form-control"  type="text" name="document" id="document" placeholder="Enter document" value="{{ $provider->document }}">
                                    @error('document')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Email</label>
                                    <input class="Form-control" type="text" name="email" id="name" placeholder="Enter email" value="{{ $provider->email }}">
                                    @error('email')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Phone</label>
                                    <input class="Form-control"  type="text" name="phone" id="phone" placeholder="Enter phone" value="{{ $provider->phone }}">
                                    @error('phone')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Address</label>
                                    <input class="Form-control" type="text" name="address" id="name" placeholder="Enter address" value="{{ $provider->address }}">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="city_id">City</label>
                                    <select class="Form-control" name="city_id" id="city_id">
                                        <option value="">Select</option>
                                        @foreach($cities as $city)
                                            <option
                                                @if($city->id === (int)$city->city_id)
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
                                    <div style="color: green;">{{ session('message') }}</div>
                                @endif
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-secondary"type="submit">Submit</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>






