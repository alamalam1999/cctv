<?php

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
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
    $mahasiswa = Mahasiswa::where('name', '!=', null)->first();

    $aspek = [];

    if (!$mahasiswa) {
        $aspek = null;
    } else {
        $aspek = json_decode($mahasiswa->aspek_penilaian);
    }
    $arrLength = "";
    $data = [
        'mahasiswa' => $mahasiswa,
        'aspek'     => $aspek,
        'arrLength' => $arrLength
    ];
    return view('dashboard.homepage', $data);
});


Route::post('/insert', function (Request $request) {
    // $insert = new Mahasiswa();
    $insert = Mahasiswa::where('name', '=', 'danny')->first();
    if (!$insert) {
        $insert = new Mahasiswa();
    }
    $aspek_nilai = array();
    array_push($aspek_nilai, [
        'aspek_penilaian_1'      => array(
            "mahasiswa_1" => $request->mahasiswa_1_1,
            "mahasiswa_2" => $request->mahasiswa_1_2,
            "mahasiswa_3" => $request->mahasiswa_1_3,
            "mahasiswa_4" => $request->mahasiswa_1_4,
            "mahasiswa_5" => $request->mahasiswa_1_5,
            "mahasiswa_6" => $request->mahasiswa_1_6,
            "mahasiswa_7" => $request->mahasiswa_1_7,
            "mahasiswa_8" => $request->mahasiswa_1_8,
            "mahasiswa_9" => $request->mahasiswa_1_9,
            "mahasiswa_10" => $request->mahasiswa_1_10
        ),
        'aspek_penilaian_2'      => array(
            "mahasiswa_1" => $request->mahasiswa_2_1,
            "mahasiswa_2" => $request->mahasiswa_2_2,
            "mahasiswa_3" => $request->mahasiswa_2_3,
            "mahasiswa_4" => $request->mahasiswa_2_4,
            "mahasiswa_5" => $request->mahasiswa_2_5,
            "mahasiswa_6" => $request->mahasiswa_2_6,
            "mahasiswa_7" => $request->mahasiswa_2_7,
            "mahasiswa_8" => $request->mahasiswa_2_8,
            "mahasiswa_9" => $request->mahasiswa_2_9,
            "mahasiswa_10" => $request->mahasiswa_2_10
        ),
        'aspek_penilaian_3'      => array(
            "mahasiswa_1" => $request->mahasiswa_3_1,
            "mahasiswa_2" => $request->mahasiswa_3_2,
            "mahasiswa_3" => $request->mahasiswa_3_3,
            "mahasiswa_4" => $request->mahasiswa_3_4,
            "mahasiswa_5" => $request->mahasiswa_3_5,
            "mahasiswa_6" => $request->mahasiswa_3_6,
            "mahasiswa_7" => $request->mahasiswa_3_7,
            "mahasiswa_8" => $request->mahasiswa_3_8,
            "mahasiswa_9" => $request->mahasiswa_3_9,
            "mahasiswa_10" => $request->mahasiswa_3_10
        ),
        'aspek_penilaian_4'      => array(
            "mahasiswa_1" => $request->mahasiswa_4_1,
            "mahasiswa_2" => $request->mahasiswa_4_2,
            "mahasiswa_3" => $request->mahasiswa_4_3,
            "mahasiswa_4" => $request->mahasiswa_4_4,
            "mahasiswa_5" => $request->mahasiswa_4_5,
            "mahasiswa_6" => $request->mahasiswa_4_6,
            "mahasiswa_7" => $request->mahasiswa_4_7,
            "mahasiswa_8" => $request->mahasiswa_4_8,
            "mahasiswa_9" => $request->mahasiswa_4_9,
            "mahasiswa_10" => $request->mahasiswa_4_10
        ),
        'aspek_penilaian_5'      => array(
            "mahasiswa_1" => $request->mahasiswa_5_1,
            "mahasiswa_2" => $request->mahasiswa_5_2,
            "mahasiswa_3" => $request->mahasiswa_5_3,
            "mahasiswa_4" => $request->mahasiswa_5_4,
            "mahasiswa_5" => $request->mahasiswa_5_5,
            "mahasiswa_6" => $request->mahasiswa_5_6,
            "mahasiswa_7" => $request->mahasiswa_5_7,
            "mahasiswa_8" => $request->mahasiswa_5_8,
            "mahasiswa_9" => $request->mahasiswa_5_9,
            "mahasiswa_10" => $request->mahasiswa_5_10
        ),
        'aspek_penilaian_6'      => array(
            "mahasiswa_1" => $request->mahasiswa_6_1,
            "mahasiswa_2" => $request->mahasiswa_6_2,
            "mahasiswa_3" => $request->mahasiswa_6_3,
            "mahasiswa_4" => $request->mahasiswa_6_4,
            "mahasiswa_5" => $request->mahasiswa_6_5,
            "mahasiswa_6" => $request->mahasiswa_6_6,
            "mahasiswa_7" => $request->mahasiswa_6_7,
            "mahasiswa_8" => $request->mahasiswa_6_8,
            "mahasiswa_9" => $request->mahasiswa_6_9,
            "mahasiswa_10" => $request->mahasiswa_6_10
        ),
        'aspek_penilaian_7'      => array(
            "mahasiswa_1" => $request->mahasiswa_7_1,
            "mahasiswa_2" => $request->mahasiswa_7_2,
            "mahasiswa_3" => $request->mahasiswa_7_3,
            "mahasiswa_4" => $request->mahasiswa_7_4,
            "mahasiswa_5" => $request->mahasiswa_7_5,
            "mahasiswa_6" => $request->mahasiswa_7_6,
            "mahasiswa_7" => $request->mahasiswa_7_7,
            "mahasiswa_8" => $request->mahasiswa_7_8,
            "mahasiswa_9" => $request->mahasiswa_7_9,
            "mahasiswa_10" => $request->mahasiswa_7_10
        ),
        'aspek_penilaian_8'      => array(
            "mahasiswa_1" => $request->mahasiswa_8_1,
            "mahasiswa_2" => $request->mahasiswa_8_2,
            "mahasiswa_3" => $request->mahasiswa_8_3,
            "mahasiswa_4" => $request->mahasiswa_8_4,
            "mahasiswa_5" => $request->mahasiswa_8_5,
            "mahasiswa_6" => $request->mahasiswa_8_6,
            "mahasiswa_7" => $request->mahasiswa_8_7,
            "mahasiswa_8" => $request->mahasiswa_8_8,
            "mahasiswa_9" => $request->mahasiswa_8_9,
            "mahasiswa_10" => $request->mahasiswa_8_10
        ),
        'aspek_penilaian_9'      => array(
            "mahasiswa_1" => $request->mahasiswa_9_1,
            "mahasiswa_2" => $request->mahasiswa_9_2,
            "mahasiswa_3" => $request->mahasiswa_9_3,
            "mahasiswa_4" => $request->mahasiswa_9_4,
            "mahasiswa_5" => $request->mahasiswa_9_5,
            "mahasiswa_6" => $request->mahasiswa_9_6,
            "mahasiswa_7" => $request->mahasiswa_9_7,
            "mahasiswa_8" => $request->mahasiswa_9_8,
            "mahasiswa_9" => $request->mahasiswa_9_9,
            "mahasiswa_10" => $request->mahasiswa_9_10
        ),
        'aspek_penilaian_10'      => array(
            "mahasiswa_1" => $request->mahasiswa_10_1,
            "mahasiswa_2" => $request->mahasiswa_10_2,
            "mahasiswa_3" => $request->mahasiswa_10_3,
            "mahasiswa_4" => $request->mahasiswa_10_4,
            "mahasiswa_5" => $request->mahasiswa_10_5,
            "mahasiswa_6" => $request->mahasiswa_10_6,
            "mahasiswa_7" => $request->mahasiswa_10_7,
            "mahasiswa_8" => $request->mahasiswa_10_8,
            "mahasiswa_9" => $request->mahasiswa_10_9,
            "mahasiswa_10" => $request->mahasiswa_10_10
        ),
    ]);
    $insert->aspek_penilaian  = json_encode($aspek_nilai);
    $insert->save();


    return "sukses";
})->name('fasting');
