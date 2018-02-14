<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function ($u) {
            $post = $u->posts()->save(factory(App\Post::class)->make());
            $post->comments()->save(factory(App\comment::class)->make(['user_id'=>$u->id,'post_id'=>$post->id]));
        });
        // $this->call(UsersTableSeeder::class);
    }
}
