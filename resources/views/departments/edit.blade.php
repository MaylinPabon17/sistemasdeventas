<div style="margin-bottom: 1em;">
    <a href="{{ route('departments.index') }}">Department List</a>
</div>

<h1>Edit Category</h1>

@if(session('massage'))
    <div style="color: green;">{{ session('massage') }}</div>
@endif

<form action="{{ route('departments.edit', $department) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter department" value="{{ $department->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>

</form>

