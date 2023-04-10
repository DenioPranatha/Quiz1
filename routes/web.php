<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/{nama}', function($nama){
    $cards = [
        [
            'name' => 'Zakaria',
            'rarity' => 'Rare',
            'detail' => 'Zakaria is a college student from East Java. Zaka master cyber security',
            'price' => '$ 120'
        ],
        [
            'name' => 'Brychan',
            'rarity' => 'Super Super Rare',
            'detail' => 'Brychan is a college student from Pontianak. Brychan master Backend Development',
            'price' => '$ 200'
        ],
        [
            'name' => 'Hasna',
            'rarity' => 'Super Rare',
            'detail' => 'Hasna is a college student from Mid Java. Hasna master Artificial Intelligence',
            'price' => '$ 150'
        ],
        [
            'name' => 'Riskya',
            'rarity' => 'Rare',
            'detail' => 'Riskya is a college student from Medan. Riskya master Frontend Development',
            'price' => '$ 90'
        ],
        [
            'name' => 'Devin',
            'rarity' => 'Super Rare',
            'detail' => 'Devin is a college student from Pontianak. Devin master Backend Development',
            'price' => '$ 160'
        ],
        [
            'name' => 'Ardo',
            'rarity' => 'Super Rare',
            'detail' => 'Ardo is a college student from Jakarta. Ardo master Backend Development',
            'price' => '$ 140'
        ]
        ];
    $new_card = [];
    foreach($cards as $card){
        if($card['name'] == $nama){
            $new_card = $card;
        }
    }

    return view('card', compact('new_card'));

});
