<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    // function fetchInsert()
    // {
    //     $response = Http::get('https://quizapi.io/api/v1/questions', [
    //         'apiKey' => 'ITAggKoRvk7tTeXTKyE8VpVtPiIBkACbw9mSkrND',
    //         'limit' => 10
    //     ]);

    //     $questions = json_decode($response->body());

    //     return $response;
    // }
    // function show()
    // {
    //     $data = Question::all();
    //     return view('welcome', $data);
    // }
}
