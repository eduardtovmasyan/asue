@extends('layouts.app')

@section('pageTitle')
    Դասացուցակ
@endsection

@section('content')
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
