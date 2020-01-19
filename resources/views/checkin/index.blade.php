@extends('layouts.standard')

@section('content')

<div class="container">
    <h1>Checkins</h1>
    <p>A basic listing of all checkins.</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Measure</th>
                <th scope="col">Serving Style</th>
                <th scope="col">Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($checkins as $checkin)
            <tr>
                <td>{{ $checkin->id }}</td>
                <td>{{ $checkin->user->name }}</td>
                <td>{{ $checkin->measure->display_name }}</td>
                <td>{{ $checkin->servingStyle->display_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
