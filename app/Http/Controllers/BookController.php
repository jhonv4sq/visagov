<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookRequest $request)
    {
        $data = $request->validated();
        
        Book::create($data);

        return redirect()->route('books.index');
    }


    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }


    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(BookRequest $request, Book $book)
    {
        $data = $request->validated();

        $book->update($data);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
