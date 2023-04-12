@extends('main')



<?php $det = $new_card["detail"]  ?>
@section('detail')
    <meta name="viewport" content="{{$det}}">
@endsection

@section('title', 'Card')

@section('content')
    <div>
    @if ($new_card['rarity'] == 'Rare')
        <?php $color = 'silver' ?>
    @elseif ($new_card['rarity'] == 'Super Rare')
        <?php $color = 'gold' ?>
    @elseif ($new_card['rarity'] == 'Super Super Rare')
        <?php $color = 'red' ?>
    @endif

        <div class="card {{ $color }}">
            <div>{{ $new_card['name'] }}</a><br>
            <div>{{ $new_card['rarity'] }}</div><br>
            <div>{{ $new_card['detail'] }}</div><br>
            <div>{{ $new_card['price'] }}</div><br>

        </div>

    </div>

    <a href="/product">Back to catalog</a>

    @endsection
