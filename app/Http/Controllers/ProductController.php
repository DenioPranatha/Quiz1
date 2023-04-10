<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
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

            return view('product', compact('cards'));
    }
}
