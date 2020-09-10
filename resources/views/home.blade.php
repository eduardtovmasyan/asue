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
    </tbody>
</table>
@endsection
@section('js')
<script src="{{ asset('js/schedule.js') }}" type="text/javascript"></script>
@endsection
