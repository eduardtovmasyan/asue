@extends('layouts.app')
@section('content')
<div class="mb-5">
    <h1>Ակադեմիական Տեղեկատվություն</h1>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Տարի</th>
            <th>Կուրս</th>
            <th>Հիմք</th>
            <th>Հրաման</th>
            <th>Ստատուս</th>
        </tr>
    </thead>
    <tbody>
        @foreach($information as $info)
        <tr>
            <td>{{ $info['academic_year'] }} - {{ $info['academic_year'] + 1 }}</td>
            <td>{{ $info['course'] }}</td>
            <td>{{ $info['himq'] }}</td>
            <td>{{ $info['hraman'] }}</td>
            <td>{{ $info['status'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection