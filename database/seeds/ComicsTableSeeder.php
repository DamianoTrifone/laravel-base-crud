<?php

use Illuminate\Database\Seeder;
use App\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');

        foreach ($arrayComics as $item){
            $Comics = new Comics();

            $Comics->title = $item["title"];
            $Comics->description = $item["description"];
            $Comics->thumb = $item["thumb"];
            $Comics->price = $item["price"];
            $Comics->series = $item["series"];
            $Comics->sale_date = $item["sale_date"];
            $Comics->type = $item["type"];

            $Comics->save();

        }
    }
}
