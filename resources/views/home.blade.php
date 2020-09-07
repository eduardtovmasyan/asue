@extends('layouts.app')
@section('content')
<div class="mb-5">
    <h1>Դասացուցակ</h1>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Ժամ</th>
            @foreach($days as $day)
            <th>{{ $day }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
        </tr>
    </tbody>
</table>
@endsection
