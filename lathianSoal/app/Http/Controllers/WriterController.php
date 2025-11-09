<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 

class WriterController extends Controller
{
    
    private $writersData = [
        'Jo' => [ 
            'name' => 'Jonathan', 
            'specialization' => 'Spesialis Data Science', 
            'image' => 'img/writer2.jpg' 
        ],
        'Mi' => [ 
            'name' => 'Michael', 
            'specialization' => 'Spesialis Interactive Multimedia', 
            'image' => 'img/writer1.jpg' 
        ],
        'Wil' => [ 
            'name' => 'William', 
            'specialization' => 'Spesialis Network Security', 
            'image' => 'img/writer3.jpg' 
        ]
    ];


    public function index()
    {
        return view('writers', ['writers' => $this->writersData]);
    }

    public function show($id) 
    {
        if (!isset($this->writersData[$id])) {
            abort(404); 
        }

        $writer = $this->writersData[$id];

        $articles = Article::where('author', $writer['name'])
                           ->latest()
                           ->get();

        return view('author', [
            'writer' => $writer,
            'articles' => $articles
        ]);
    }
}