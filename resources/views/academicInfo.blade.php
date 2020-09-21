@extends('layouts.app')
@section('pageTitle')
Ակադեմիական Տեղեկատվություն
@endsection
@section('content')
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
            <td>{{ $info['statusName'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
