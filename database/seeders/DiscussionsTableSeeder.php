<?php

namespace Database\Seeders;

use App\Models\Discussion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Comment faire de la pagination en laravel 8?';
        $t2 = 'Comment definir des routes sous Angular?';
        $t3 = 'Vuejs event listeners for child components';
        $t4 = 'how to make beautiful effects with javascript?';

        $d1 = [
            'title' => $t1,
            'content' => 'je ne comprend pas prkw ca ne marche pas pourtant je fais un paginate()',
            'channel_id' => 1,
            'user_id' => 1,
            'slug' => Str::slug($t1, '-')
        ];

        $d2 = [
            'title' => $t2,
            'content' => 'je voudrais savoir comment utiliser le app routing module svp, ke rencontre des problemes dessus',
            'channel_id' => 3,
            'user_id' => 2,
            'slug' => Str::slug($t2, '-')
        ];

        $d3 = [
            'title' => $t3,
            'content' => 'vue js is very strong i dont understand this please hepl me',
            'channel_id' => 2,
            'user_id' => 2,
            'slug' => Str::slug($t3, '-')
        ];

        $d4 = [
            'title' => $t4,
            'content' => 'svp je voudrais savoir comment faire de belles animations avec javascript, je sais il est possible de le faire mais je ne sais pas comment faire',
            'channel_id' => 5,
            'user_id' => 3,
            'slug' => Str::slug($t4, '-')
        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
    }
}
