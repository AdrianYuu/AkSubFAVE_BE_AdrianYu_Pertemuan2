@extends('layouts.main-layout')

@section('title', 'List')

@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Item Name</th>
            <th>Item Description</th>
            <th>Item Price</th>
            <th>Item Picture</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($itemList as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>Rp {{ $item->price }}</td>
                <td><img src="{{ asset('storage/images/' . $item->picture) }}" alt="itemPicture" style="width:200px; height:200px"></td>
                <td>
                    <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('delete', $item->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @empty
            <h1>There is no item!</h1>
        @endforelse
    </tbody>
</table>

@endsection