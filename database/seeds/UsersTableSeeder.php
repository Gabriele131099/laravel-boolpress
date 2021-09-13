<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // title varchar(255)
        // abstract text
        // cover text
        // price double
        // genere

        $books = [
            [
                'title' => 'Promessi Sposi',
                'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'cover' => 'https://www.blackcat-cideb.com/uploads/2017/03/486-486_1f1b152778950e4d1171f5a69b869632.jpg',
                'genere' => 'romanzo',
                'price' => '8.90'
            ],
            [
                'title' => 'Il nome della rosa',
                'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81dhmnbA1VL.jpg',
                'genere' => 'romanzo',
                'price' => '7.90'
            ],
            [
                'title' => 'La Divina Commedia',
                'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'cover' => 'https://www.arte.go.it/shop/wp-content/uploads/2019/07/Alighieri-Dante_La-Divina-Commedia-Inferno.jpg',
                'genere' => 'classico',
                'price' => '10.20'
            ]
        ];

        foreach($books as $book) {
            $bookObject = new Book();
            $bookObject->title = $book['title'];
            $bookObject->abstract = $book['abstract'];
            $bookObject->cover = $book['cover'];
            $bookObject->genere = $book['genere'];
            $bookObject->price = $book['price'];
            $bookObject->save();
        }


    }
}