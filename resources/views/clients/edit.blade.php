<div style="margin-bottom: 1em;">
    <a href="{{ route('clients.index') }}">Client List</a>
</div>

<h1>Edit Client</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('clients.edit', $client) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter client" value="{{ $client->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name">Lastname</label>
        <input type="text" name="lastname" id="lastname" placeholder="Enter lastname" value="{{ $client->lastname }}">
        @error('lastname')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name">Document</label>
        <input type="text" name="document" id="document" placeholder="Enter document" value="{{ $client->document }}">
        @error('document')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter phone" value="{{ $client->phone }}">
        @error('phone')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
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
    <div>
        <button type="submit">Submit</button>
    </div>

</form>
