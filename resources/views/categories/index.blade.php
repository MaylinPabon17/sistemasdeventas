<div><a href="/">Home</a></div>
<a href="{{ route('categories.create') }}">New Category</a>

@if(session('massage'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Name.</td>
        <td>Description</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($categories as $key => $category)
        <tr>
            <td>{{ $categories->firsItem() + $key }}.</td>
            <td>{{ $categories->name}}</td>
            <td>{{ $categories->description}}</td>
            <td>{{ $categories->create_at->format('F d, Y')}}</td>
            <td>
                <a href="{{ route('$categories.edit', $category) }}">Edit</a>

                <form action="{{ route('$categories.delete', $category) }}" method="post">
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
