@extends('layouts.app')
@section('content')
<div class="mb-5">
    <h1>Հետադարձ կապ</h1>
</div>
<div class="form-group">
    <div class="doc" class="selects">
        <label for="doc">Փաստաթղթի տեսակ:</label>
        <select class="form-control" id="doc">
            <option disabled="" muted selected>Փաստաթղթի տեսակ</option>
            @foreach($documents as $document)
            <option value="{{ $document->id }}">{{ $document->name }}</option>
            @endforeach
        </select>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/contact.js')}}" type="text/javascript"></script>
@endsection