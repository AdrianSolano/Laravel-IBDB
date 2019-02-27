<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Book;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BooksTest extends TestCase
{   
    use DatabaseTransactions;

    /** @test */
    public function check_if_book_route_loads()
    {
        $this->get('/books')
        ->assertOk()
        ->assertSeeText('More Info');
    }

    /** @test */
    public function check_book_detail_page_loads()
    {
        //Crea un libro
        
        $book = factory('App\Book')->create();
        //Comprueba URL
        $this->get('/books/'.$book->slug)
            ->assertOk()
            ->assertSee($book->title)
            ->assertSee($book->publisher->name)// Publisher
            ->assertSee($book->authors->pluck('name')->implode(', '))  // Authors
            ->assertSee($book->description)
        ;
    }
     /** @test */
      public function check_if_a_guess_user_can_creates_a_book()
     {
         $this->get('/books/create')
            ->assertRedirect('/login')
            ->assertStatus(302)
         ;
     }
      /** @test */
      public function check_if_a_logged_user_can_creates_a_book()
     {   //Crear Usuario
         $this->actingAs( factory('App\User')->create() );

         $this->get('/books/create')
            ->assertSee('Add New Book')
         ;
     } 
      /** @test */
      public function check_user_creates_a_book()
      {
        $this->actingAs( factory('App\User')->create() );
        $book = factory('App\Book')->create();

        $this->post('/books', $book->toArray());

        $this->assertDatabaseHas('books',[
            'title' => $book->title,
            'slug' => $book->slug,
            'description' => $book->description
        ]);
        

      }


}
