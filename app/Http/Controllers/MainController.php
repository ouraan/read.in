<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    public function store(Request $request){
        Book::create($request->all());
        return redirect('/home');
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id){
        Book::findOrFail($id)->update($request->all());
        return redirect('/home');
    }

    public function search(Request $request){
        $search = $request->input('search');
        $books = Book::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->get();
        return view('home', compact('books')); 
    }
}
