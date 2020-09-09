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
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
    </tbody>
</table>
@endsection
@section('js')
<script src="{{ asset('js/schedule.js')}}" type="text/javascript"></script>
@endsection
