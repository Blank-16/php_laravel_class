<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookapicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $books = [
        ['id' => 1, 'title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
        ['id' => 2, 'title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
        ['id' => 3, 'title' => '1984', 'author' => 'George Orwell']
    ];
    public function index()
    {
        $books = collect($this->books);

        return response()->json([
            'status' => 'success',
            'data' => $books
        ]);
    }

    // GET /api/books/{id}
    public function show($id)
    {
        $book = collect($this->books)->firstWhere('id', $id);

        if (!$book) {
            return response()->json([
                'status' => 'error',
                'message' => 'Book not found'
            ], 404);
        }

        return response()
            ->json([
                'status' => 'success',
                'data' => $book
            ])
            ->cookie('last_viewed_book', $book['id'], 60);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
