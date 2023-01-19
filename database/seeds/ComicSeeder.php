<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comic = config('fumetti');

        foreach ($array_comic as $elem) {
            $array_comic = new Comic();
            $array_comic->title = $elem['title'];
            $array_comic->description = $elem['description'];
            $array_comic->thumb = $elem['thumb'];
            $array_comic->price = $elem['price'];
            $array_comic->series = $elem['series'];
            $array_comic->sale_date = $elem['sale_date'];
            $array_comic->type = $elem['type'];
            $array_comic->save();
        };
    }
}
