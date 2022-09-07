<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    private $user;

    private function book()
    {
        return Book::factory()->make()->toArray();
    }


    // public function test_can_show_book()
    // {
    //     $book = Book::factory()->create();
    //     $this->assertDatabaseCount('books', 1);

    //     $response = $this->get(route('books.show', $book->id));
    //     $response->assertSee($book->title, $book->author);
    //     $response->assertOk();

    //     $this->withoutExceptionHandling();
    // }

    public function test_can_store_book()
    {
        $book = $this->book();

        $response = $this->post(route('books.store'), $book);
        $this->assertDatabaseCount('books', 1);
        
        $this->withoutExceptionHandling();  
    }

    public function test_can_update_book()
    {
        $book = Book::factory()->create();
        $editedBook = $book->toArray();
        $newTitle = 'new title';
        $editedBook['title'] = $newTitle;

        $response = $this->put(route('books.update', $book->id), $editedBook);

        $this->assertDatabaseCount('books', 1);
        $this->assertEquals(Book::find($book->id)->title, $newTitle);
        
        $this->withoutExceptionHandling();
    }

    public function test_can_delete_book()
    {
        $book = Book::factory()->create();
        $this->assertDatabaseCount('books', 1);

        $response = $this->delete(route('books.destroy', $book->id));

        $this->assertDatabaseCount('books', 0);
        $this->withoutExceptionHandling();
    }
}
