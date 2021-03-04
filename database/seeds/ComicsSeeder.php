<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_list = config('comics');

        foreach ($comics_list as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->availability = $comic['availability'];
            $newComic->description = $comic['description'];
            $newComic->artists = $comic['artists'];
            $newComic->writers = $comic['writers'];
            $newComic->series = $comic['series'];
            $newComic->price = $comic['price'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->volume = $comic['volume'];
            $newComic->trim_size = $comic['trim_size'];
            $newComic->page_count = $comic['page_count'];
            $newComic->rated = $comic['rated'];
            $newComic->save();
        }
        
    }
}
