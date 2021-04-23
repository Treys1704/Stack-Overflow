<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('channels')->insert([
            'name' => 'Laravel 8',
            'slug' => Str::slug('laravel 8', '-')
        ]);

        DB::table('channels')->insert([
            'name' => 'Vue js 3',
            'slug' => Str::slug('Vue js 3', '-')
        ]);

        DB::table('channels')->insert([
            'name' => 'Angular JS',
            'slug' => Str::slug('Angular JS', '-')
        ]);

        DB::table('channels')->insert([
            'name' => 'Node js',
            'slug' => Str::slug('Node js', '-')
        ]);

        DB::table('channels')->insert([
            'name' => 'Javascript',
            'slug' => Str::slug('Javascript', '-')
        ]);

        DB::table('channels')->insert([
            'name' => 'PHP',
            'slug' => Str::slug('PHP 8', '-')
        ]);

//        DB::table('channels')->insert(array(
//            array(
//                'name' => 'Laravel 8'
//            ),
//            array(
//                'name' => 'Vue js 3'
//            ),
//            array(
//                'name' => 'Angular JS'
//            ),
//            array(
//                'name' => 'Node JS'
//            ),
//            array(
//                'name' => 'Javascript'
//            ),
//            array(
//                'name' => 'PHP'
//            )
//        ));


//        DB::table('channels')->insert(array(
//            array(
//                'name' => 'Laravel 8',
//                'slug' => Str::slug('laravel 8', '-'),
//            ),
//            array(
//                'name' => 'Vue js 3',
//                'slug' => Str::slug('Vue js 3', '-'),
//            ),
//            array(
//                'name' => 'Angular JS',
//                'slug' => Str::slug('Angular JS', '-'),
//            ),
//            array(
//                'name' => 'Node JS',
//                'slug' => Str::slug('Node JS', '-'),
//            )
//        ));


//        Channel::create([
//           'name' => 'Laravel 8',
//           'slug' => Str::slug('laravel 8', '-')
//        ]);
//
//        Channel::create([
//            'name' => 'Vue js 3',
//            'slug' => Str::slug('Vue js 3', '-')
//        ]);
//
//        Channel::create([
//            'name' => 'Angular JS',
//            'slug' => Str::slug('Angular JS', '-')
//        ]);
//
//        Channel::create([
//            'name' => 'Node js',
//            'slug' => Str::slug('Node js', '-')
//        ]);
    }
}
