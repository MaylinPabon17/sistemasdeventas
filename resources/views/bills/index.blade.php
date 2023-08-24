@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div><a href="/">Home</a></div>
<a href="{{ route('bills.create') }}">New Bill</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table class="table" cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Total</td>
        <td>Client</td>
        <td>Employee</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($bills as $key => $bill)
        <tr>
            <td>{{ $bills->firstItem() + $key }}.</td>
            <td>{{ $bill->total}}</td>


            <td>
                {{ $bill->Client->name}}
            </td>
            <td>
                {{ $bill->Employee->name}}
            </td>
            <td>{{ $bill->created_at->format('F d, Y') }}</td>

            <td>

                <a href="{{ route('bills.edit', $bill) }}">Edit</a>

                <form action="{{ route('bills.delete', $bill) }}" method="post">
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
