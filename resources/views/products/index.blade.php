<div><a href="/">Home</a></div>
<a href="{{ route('products.create') }}">New Productos</a>

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
    @forelse($products as $key => $product)
        <tr>
            <td>{{ $products->firsItem() + $key }}.</td>
            <td>{{ $products->name}}</td>
            <td>{{ $products->price}}</td>
            <td>
                {{ $products->category->name}}
            </td>
            <td>
                <a href="{{ route('$products.edit', $category) }}">Edit</a>

                <form action="{{ route('$products.delete', $category) }}" method="post">
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
