<div style="margin-bottom: 1em;">
    <a href="{{  route('bills.index') }}">Bill List</a>

</div>

<h1>Create Bill</h1>

@if(session('message'))
    <div style="color: green">{{ session('message') }}</div>
@endif

<form action="{{ route('bills.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Total</label>
        <input type="text" name="total" id="total" placeholder="enter total" value="{{ old('total') }}">
        @error('total')
        <div style="color: red">{{ route($massage) }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="client_id">Client</label>
        <select name="client_id" id="client_id">
            <option value="">Select</option>

            @foreach($clients as $client)
                <option
                    @if($client->id=== (int)old('client_id'))
                        selected
                    @endif
                    value="{{ $client->id }}">{{ $client->name}}</option>
            @endforeach
        </select>
        @error('client_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="employee_id">Employee</label>
        <select name="employee_id" id="employee_id">
            <option value="">Select</option>

            @foreach($employees as $employee)
                <option
                    @if($employee->id=== (int)old('employee_id'))
                        selected
                    @endif
                    value="{{ $employee->id }}">{{ $employee->name}}</option>
            @endforeach
        </select>
        @error('employee_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
