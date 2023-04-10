@extends('main')

@section('title', 'Products | {{ $cards }}')

@section('content')
    <div>
    @foreach ($cards as $card)
    @if ($card['rarity'] == 'Rare')
        <?php $color = 'silver' ?>
    @elseif ($card['rarity'] == 'Super Rare')
        <?php $color = 'gold' ?>
    @elseif ($card['rarity'] == 'Super Super Rare')
        <?php $color = 'red' ?>
    @endif
    <div class="card {{ $color }}">

        <a href="/{{ $card['name'] }}">{{ $card['name'] }}</a><br>
        <a href="/{{ $card['name'] }}">{{ $card['rarity'] }}</a><br>
        <a href="/{{ $card['name'] }}">{{ $card['detail'] }}</a><br>
        <a href="/{{ $card['name'] }}">{{ $card['price'] }}</a><br>

    </div>
    @endforeach

    </div>
@endsection

