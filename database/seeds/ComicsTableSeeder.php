<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10 ; $i++) {
            $comics = new Comic();
            $comics->title = 'DC';
            $comics->description = 'lorem';
            $comics->thumb = 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX';
            $comics->price = 150;
            $comics->series = 'lorem2';
            $comics->sale_date = '2002/02/12';
            $comics->type = 'comic book';
            $comics->save();
        }
    }
}
