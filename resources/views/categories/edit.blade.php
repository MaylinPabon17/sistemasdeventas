<div style="margin-bottom: 1em;">
    <a href="{{ route('categories.index') }}">Category List</a>
</div>

<h1>Edit Category</h1>

@if(session('massage'))
    <div style="color: green;">{{ session('massage') }}</div>
@endif

<form action="{{ route('categories.edit', $category) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter category" value="{{ $category->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Enter description"
               value="{{ $category->description }}">
        @error('description')
        <div style="color: red">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>


