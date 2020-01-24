@extends('layouts.standard')

@section('content')


<div class="container">
    <h1>Measures</h1>
    <p>Beers come in all shapes and sizes. Ciders and wines too!</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Slug</th>
                <th scope="col">Title</th>
                <th scope="col">Enabled</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($measures as $measure)
            <tr>
                <td>{{ $measure->id }}</td>
                <td>{{ $measure->slug }}</td>
                <td>{{ $measure->display_name }}</td>
                <td>{{ $measure->enabled ? 'Yes' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
