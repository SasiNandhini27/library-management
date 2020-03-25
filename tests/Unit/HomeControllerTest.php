<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Mockery;
use App\Book;
use Illuminate\Foundation\Testing\WithFaker;

class HomeControllerTest extends TestCase
{
	use RefreshDatabase;
    /**
     *
     * @return void
     */
    public function testUserRouteTest()
    {
        $response = $this->get('/home');
        $this->assertEquals(302, $response->status());
    }

    /**
     *
     * @return void
     */
    public function testAdminRouteTest()
    {
        $response = $this->get('/admin/home');
        $this->assertEquals(302, $response->status());
    }

    /**
     *
     * @return void
     */
    public function testBooksCountTest()
    {
    	$booksCount = 5;
    	$books = factory(Book::class, $booksCount)->create();
    	$this->assertEquals($booksCount, \count($books));
    }
}
