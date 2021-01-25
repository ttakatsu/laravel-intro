<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        // DBからBookテーブルの値をすべて取得
        $books = Book::all();

        // 取得した値をビュー book/index にわたす
        return view('book/index', compact('books'));
    }

    public function edit($id)
    {
        // DBからidのBookを取得
        $book = Book::findOrFail($id);

        // 取得した値をビュー book/edit にわたす
        return view('book/edit', compact('book'));
    }
}
