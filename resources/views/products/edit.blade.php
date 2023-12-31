<div style="margin-bottom: 1em;">
    <a href="{{ route('products.index') }}">Category List</a>
</div>

<h1>Edit Product</h1>

@if(session('massage'))
    <div style="color: green;">{{ session('massage') }}</div>
@endif

<form action="{{ route('products.edit', $category) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter category" value="{{ $product->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="description">Price</label>
        <input type="text" name="price" id="price" placeholder="Enter price"
               value="{{ $product->price }}">
        @error('price')
        <div style="color: red">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            <option value="">Select</option>
            @foreach($categories as $category)
                <option
                    @if($category->id===(int)old('$category_id'))
                        selected
                    @endif
                    value="{{ $category->id }}">{{ $category->name}}</option>
            @endforeach
        </select>
        @error('$category_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>
