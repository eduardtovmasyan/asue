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
        <div>Կրթական ծրագիր՝</div>
        <div>Որակավորման անվանում՝</div>
        <div>Ուսուցման նորմատիվային ժամկետ՝</div>
        <div>Հաստատման տարեթիվ՝</div>
    </div>
    <div class="col">
        <div>Կրթական աստիճան՝</div>
        <div>Ուսուցման ձևը՝</div>
        <div>Մասնագիտություն՝</div>
        <div>Կրթական ծրագիր՝</div>
        <div>Որակավորման անվանում՝</div>
        <div>Ուսուցման նորմատիվային ժամկետ՝</div>
        <div>Հաստատման տարեթիվ՝</div>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Հ․Հ․</th>
            <th>Դասիչը</th>
            <th>Դասընթացի անվանումը</th>
            <th>
                <div class="rotate">
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
                    <strong>Կուրսային աշխատանք</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Կուրսային նախագիծ</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Հաշվեգրաֆիկական աշխատանք</strong>
                </div>
            </th>
            <th>
                <div class="rotate">
                    <strong>Ստուգողական աշխատանք</strong>
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
    </tbody>
</table>
@endsection

@section('js')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/graphic.css') }}">
@endsection