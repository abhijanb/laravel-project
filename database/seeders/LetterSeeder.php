<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\letter;
use Illuminate\Support\Facades\File;

class LetterSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path:'database\json\letters.json');
        $letters = collect(json_decode($json));
    /**
     * Run the database seeds.
     */
// $letters = collect(

//     [
//         "ㄱ" => "ग",
//         "ㄴ" => "न",
//         "ㄷ" => "द",
//         "ㄹ" => "र",
//         "ㅁ" => "म",
//         "ㅂ" => "ब",
//         "ㅅ" => "स",
//         "ㅇ" => "ङ",
//         "ㅈ" => "ज",
//         "ㅊ" => "च",
//         "ㅋ" => "क",
//         "ㅌ" => "ट",
//         "ㅍ" => "प",
//         "ㅎ" => "ह",
//         "ㅏ" => "आ",
//         "ㅑ" => "या",
//         "ㅓ" => "ओ",
//     "ㅕ" => "यो",
//     "ㅗ" => "ओ",
//     "ㅛ" => "यो",
//     "ㅜ" => "ऊ",
//     "ㅠ" => "यू",
//     "ㅡ" => "ए",
//     "ㅣ" => "ई",
//     "ㅐ" => "ऐ",
//     "ㅔ" => "ए",
//     "ㅒ" => "यै",
//     "ㅖ" => "ये",
//     "ㅘ" => "वा",
//     "ㅚ" => "वे",
//     "ㅙ" => "वै",
//     "ㅝ" => "उआ",
//     "ㅟ" => "वी",
//     "ㅞ" => "वे",
//     "ㅢ" => "इ"
// ]

//     );
    $letters->each(function($nepali,$korean){
letter::create([
    'korean' => $korean,
    'nepali' => $nepali
]);
    }) ;
        //
    }
}
