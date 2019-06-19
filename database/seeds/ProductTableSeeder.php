<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\product([
        	'imagePath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9_lh_3dgUG0Pvbn_4XfH5xAp4BW0b9xUNSjfow9QQlVtF7CoF5Q',
        	'title' => 'Harry Potter',
        	'description' => 'super cool -at least as achild.',
        	'price' => 10

        ]);
        $product->save();
        $product = new \App\product([
        	'imagePath' => 'https://static.arageek.com/wp-content/uploads/The-Prince2.jpg',
        	'title' => 'The Prince',
        	'description' => 'The Prince is a 16th-century political treatise by the Italian diplomat and political theorist Niccolò Machiavelli.',
        	'price' => 12

        ]);
        $product->save();
        $product = new \App\product([
        	'imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/a/ab/JoyceUlysses2.jpg',
        	'title' => 'Ulysses',
        	'description' => 'Ulysses is a modernist novel by Irish writer James Joyce. It was first serialised in parts in the American journal The Little Review from March 1918 to December 1920 and then published in its entirety in Paris by Sylvia Beach on 2 February 1922, Joyce\'s 40th birthday. ',
        	'price' => 8

        ]);
        $product->save();
        $product = new \App\product([
        	'imagePath' => 'https://media.bloomsbury.com/rep/bj/9781847496140.jpg',
        	'title' => 'The Great Gatsby',
        	'description' => 'The Great Gatsby is a 1925 novel written by American author F. Scott Fitzgerald that follows a cast of characters living in the fictional towns of West Egg and East Egg on prosperous Long Island in the summer of 1922.',
        	'price' => 15

        ]);
        $product->save();
        $product = new \App\product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51ZaFL6B7lL._SX326_BO1,204,203,200_.jpg',
        	'title' => 'Hamlet',
        	'description' => 'The Tragedy of Hamlet, Prince of Denmark, often shortened to Hamlet, is a tragedy written by William Shakespeare sometime between 1599 and 1602.',
        	'price' => 16

        ]);
        $product->save();
        
    }
}
