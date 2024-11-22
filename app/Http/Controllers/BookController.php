<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Book;

class BookController extends Controller
{

    public function index ()
    {
        $books = Book::all();
        return view('books.index', compact('books'));

    }

    public function show( $id)
    {
         $books = Book::find($id);
         return view('books.show', compact('books'));
        // echo "$id";
    }

    public   function create()
    {
        return view ('books.create');
    }


    public function store(Request $request)
{
    // Validate the input fields, including description
    $request->validate([
        'id' => 'required|integer|unique:books,id',
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'description' => 'required|string|max:500', // Add validation for description
    ]);

    // Create a new Book instance and save it
    $book = new Book();
    $book->id = $request->id;
    $book->title = $request->title;
    $book->author = $request->author;
    $book->description = $request->description; // Save the description
    $book->save();

    // Redirect to the 'show' route with the book's ID
    // return redirect()->route('book.show', ['id' => $book->id]);
    return redirect()->route('index');
}


public   function  edit( $id)
{
    $book = Book::findOrFail($id);
    //  dd($book->toArray());
    return view('books.edit', compact('book'));

    // return view ('books.edit');
}

public function update(Request $request, $id)
{
    // Validate the input data
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'description' => 'required|string|max:500',
    ]);

    // Find the book and update its details
    $book = Book::findOrFail($id);
    $book->title = $request->title;
    $book->author = $request->author;
    $book->description = $request->description;
    $book->save();

    // Redirect to the index or show page with a success message
    return redirect()->route('index')->with('success', 'Book updated successfully!');
}



public function destroy($id)
{
    // Find the book by its ID
    $book = Book::findOrFail($id);

    // Delete the book
    $book->delete();

    // Redirect with a success message
    return redirect()->route('index')->with('success', 'Book deleted successfully!');
}





}
