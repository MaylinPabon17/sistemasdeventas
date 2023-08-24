<div style="margin-bottom: 1em;">
    <a href="{{  route('clients.index') }}">Client List</a>

</div>

<h1>Create Client</h1>

@if(session('message'))
    <div style="color: green">{{ session('message') }}</div>
@endif

<form action="{{ route('clients.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="enter client" value="{{ old('name') }}">
        @error('name')
        <div style="color: red">{{ route($message) }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" placeholder="enter lastname" value="{{ old('lastname') }}">
        @error('lastname')
        <div style="color: red">{{ route($massage) }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name">Document</label>
        <input type="text" name="document" id="document" placeholder="enter document" value="{{ old('document') }}">
        @error('document')
        <div style="color: red">{{ route($message) }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="enter phone" value="{{ old('phone') }}">
        @error('phone')
        <div style="color: red">{{ route($message) }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
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
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
