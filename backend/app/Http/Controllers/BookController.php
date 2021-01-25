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

    /**
     * @param \Illuminate\Http\Request  $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->name = $request->input('name');
        $book->price = $request->price;
        $book->author = $request->author;
        $book->save();

        return redirect('/book');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/book');
    }

    public function create()
    {
        // 空の$bookをビューに渡す
        $book = new Book();
        return view('book.create');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->input('name');
        $book->price = $request->input('price');
        $book->author = $request->input('author');
        $book->save();

        return redirect('/book');
    }
}
