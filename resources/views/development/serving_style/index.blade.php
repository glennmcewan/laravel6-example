@extends('layouts.standard')

@section('content')


<div class="container">
    <h1>Serving Styles</h1>
    <p>Beer is served in many ways -- cask, keg, bottles, etc. Ciders and wines too!</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Slug</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servingStyles as $servingStyle)
            <tr>
                <td>{{ $servingStyle->id }}</td>
                <td>{{ $servingStyle->slug }}</td>
                <td>{{ $servingStyle->display_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
