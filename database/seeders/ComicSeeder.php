<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        $fumetti = config('comics.arrayComics');
        foreach($fumetti as $elem){
            $newFumetti = new Comic();
            $newFumetti -> title = $elem['title'];
            $newFumetti -> description = $elem['description'];
            $newFumetti -> thumb = $elem['thumb'];
            $newFumetti -> price = $elem['price'];
            $newFumetti -> series = $elem['series'];
            $newFumetti -> sale_date = $elem['sale_date'];
            $newFumetti -> type = $elem['type'];
            $newFumetti -> save();
        }
    }
}