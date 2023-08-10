<div><a href="/">Home</a></div>
<a href="{{ route('employees.create') }}">New City</a>

@if(session('massage'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Lastname</td>
        <td>Document</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Post</td>
        <td>address</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($cities as $key => $city)
        <tr>
            <td>{{ $cities->firstItem() + $key }}.</td>
            <td>{{ $city->name}}</td>
            <td>{{ $city->lastname}}</td>
            <td>{{ $city->document}}</td>
            <td>{{ $city->phone}}</td>
            <td>{{ $city->email}}</td>
            <td>{{ $city->post}}</td>
            <td>{{ $city->address}}</td>
            <td>
                {{ $city->department->name}}
            </td>

            <td>
                <a href="{{ route('cities.edit', $city) }}">Edit</a>

                <form action="{{ route('cities.delete', $city) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
