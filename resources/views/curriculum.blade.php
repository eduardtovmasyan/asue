@extends('layouts.app')

@section('pageTitle')
    ՈՒսումնական պլան
@endsection

@section('content')
<div class="row mb-5">
    <div class="col text-right">
        <div>Կրթական աստիճան՝</div>
        <div>Ուսուցման ձևը՝</div>
        <div>Մասնագիտություն՝</div>
        <div>Որակավորման անվանում՝</div>
    </div>
    <div class="col">
        <div>{{ $pageInfo['teachProgram'] }}</div>
        <div>{{ $pageInfo['teachType'] }}</div>
        <div>{{ $pageInfo['speciality'] }}</div>
        <div>{{ $pageInfo['quality'] }}</div>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th class="text-center" style="padding: 150px 0;">Հ․Հ․</th>
            <th class="text-center" style="padding: 150px 0;">Դասիչը</th>
            <th class="text-center" style="width: 40%; padding: 150px 0;">Դասընթացի անվանումը</th>
            <th>
                <div class="rotate text-center">
                    <strong>Ստուգարք</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Քննություն</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Ընդամենը ժամաքանակը</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Ընդամենը կրեդիտներ</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Դասախոսություն</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Գործնական</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Լաբորատոր</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Ընդամենը լսարանային ժամերը</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Անհատական աշխատանք</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Գիտահետազոտական աշխատանք</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Լսարան․ ժամ / շաբաթական</strong>
                </div>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="text-center table-dark" colspan="16" style="border: 1px solid #eee;padding: 0;">
                {{ Auth::user()->information->studentCourse->where('status', 1)->first()->course }} կուրս 
                {{ Auth::user()->information->studentCourse->where('status', 1)->first()->kisamyak }} կիսամըակ
            </th>
        </tr>
        <tr>
            <th class="table-light" colspan="16" style="border: 1px solid #eee;padding: 0;">Պարտադիր դասընթացներ</th>
        </tr>
    </tbody>
</table>
@endsection

@section('js')
    <script src="{{ asset('js/curriculum.js') }}" type="text/javascript"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/graphic.css') }}">
@endsection
