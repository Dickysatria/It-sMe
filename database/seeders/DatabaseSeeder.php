<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([

            'name' => 'Riyan Dicky Satria',
            'username' => 'Dicky Ganteng',
            'email'=>  'dickysatria62@gmail.com',
            'password'=> bcrypt('12345')

        ]);

        // User::create([

        //     'name' => 'Reno Wahyu',
        //     'email'=>  'reno62@gmail.com',
        //     'password'=> bcrypt('12345')

        // ]);
        User::factory(4)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

    //     Post::create([
    //         'title' => 'Html Ku',
    //         'slug'  => 'html-ku',
    //         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptas!',
    //         'body'  => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore eos, molestias ullam id facere sunt voluptates rem. Vel ea maiores molestias, iure inventore repudiandae ex voluptas vero asperiores tempore esse autem natus at ipsa nobis, suscipit eveniet reiciendis voluptatibus dicta quidem odit cumque deserunt velit! Et vel, </p><p>eius odit, nam assumenda aperiam consequuntur eum veniam vitae, sed accusamus quos molestias dolorum impedit libero laudantium. Blanditiis, culpa, facilis autem eius eligendi quae fugit, rerum repudiandae vitae nam quisquam numquam inventore! Veritatis provident dolorum id, sapiente minus neque dignissimos quam reiciendis est quaerat </p><p>nihil architecto obcaecati cumque beatae quas error, quasi dolor. Laborum dolorum quod ad laudantium ea, iure dolorem. Eaque ipsum assumenda impedit vero asperiores, quia quod veniam tenetur incidunt magni quis laboriosam praesentium aliquid deserunt. Alias commodi molestiae nemo praesentium libero iusto, ipsa unde vero fuga debitis laudantium rem deleniti suscipit nihil ex quis numquam eligendi sapiente, voluptates consectetur iure fugit mollitia? Rerum ipsum architecto dignissimos recusandae ullam dolores, quibusdam possimus itaque voluptate amet accusantium quo, ad saepe sapiente eligendi ipsam suscipit nisi eos reiciendis hic, reprehenderit ratione! Quos corporis voluptatum voluptate officiis nam odio similique soluta nihil atque,quod ipsa autem cupiditate temporibus dignissimos quidem laborum qui aspernatur et!</p>',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);
    //     Post::create([
    //         'title' => 'PHP Ku',
    //         'slug'  => 'php-ku',
    //         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptas!',
    //         'body'  => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore eos, molestias ullam id facere sunt voluptates rem. Vel ea maiores molestias, iure inventore repudiandae ex voluptas vero asperiores tempore esse autem natus at ipsa nobis, suscipit eveniet reiciendis voluptatibus dicta quidem odit cumque deserunt velit! Et vel, </p><p>eius odit, nam assumenda aperiam consequuntur eum veniam vitae, sed accusamus quos molestias dolorum impedit libero laudantium. Blanditiis, culpa, facilis autem eius eligendi quae fugit, rerum repudiandae vitae nam quisquam numquam inventore! Veritatis provident dolorum id, sapiente minus neque dignissimos quam reiciendis est quaerat </p><p>nihil architecto obcaecati cumque beatae quas error, quasi dolor. Laborum dolorum quod ad laudantium ea, iure dolorem. Eaque ipsum assumenda impedit vero asperiores, quia quod veniam tenetur incidunt magni quis laboriosam praesentium aliquid deserunt. Alias commodi molestiae nemo praesentium libero iusto, ipsa unde vero fuga debitis laudantium rem deleniti suscipit nihil ex quis numquam eligendi sapiente, voluptates consectetur iure fugit mollitia? Rerum ipsum architecto dignissimos recusandae ullam dolores, quibusdam possimus itaque voluptate amet accusantium quo, ad saepe sapiente eligendi ipsam suscipit nisi eos reiciendis hic, reprehenderit ratione! Quos corporis voluptatum voluptate officiis nam odio similique soluta nihil atque,quod ipsa autem cupiditate temporibus dignissimos quidem laborum qui aspernatur et!</p>',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);
    //     Post::create([
    //         'title' => 'About Me',
    //         'slug'  => 'about-me',
    //         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptas!',
    //         'body'  => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore eos, molestias ullam id facere sunt voluptates rem. Vel ea maiores molestias, iure inventore repudiandae ex voluptas vero asperiores tempore esse autem natus at ipsa nobis, suscipit eveniet reiciendis voluptatibus dicta quidem odit cumque deserunt velit! Et vel, </p><p>eius odit, nam assumenda aperiam consequuntur eum veniam vitae, sed accusamus quos molestias dolorum impedit libero laudantium. Blanditiis, culpa, facilis autem eius eligendi quae fugit, rerum repudiandae vitae nam quisquam numquam inventore! Veritatis provident dolorum id, sapiente minus neque dignissimos quam reiciendis est quaerat </p><p>nihil architecto obcaecati cumque beatae quas error, quasi dolor. Laborum dolorum quod ad laudantium ea, iure dolorem. Eaque ipsum assumenda impedit vero asperiores, quia quod veniam tenetur incidunt magni quis laboriosam praesentium aliquid deserunt. Alias commodi molestiae nemo praesentium libero iusto, ipsa unde vero fuga debitis laudantium rem deleniti suscipit nihil ex quis numquam eligendi sapiente, voluptates consectetur iure fugit mollitia? Rerum ipsum architecto dignissimos recusandae ullam dolores, quibusdam possimus itaque voluptate amet accusantium quo, ad saepe sapiente eligendi ipsam suscipit nisi eos reiciendis hic, reprehenderit ratione! Quos corporis voluptatum voluptate officiis nam odio similique soluta nihil atque,quod ipsa autem cupiditate temporibus dignissimos quidem laborum qui aspernatur et!</p>',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);
    //     Post::create([
    //         'title' => 'Tentang Saya',
    //         'slug'  => 'Tentang-saya',
    //         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptas!',
    //         'body'  => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore eos, molestias ullam id facere sunt voluptates rem. Vel ea maiores molestias, iure inventore repudiandae ex voluptas vero asperiores tempore esse autem natus at ipsa nobis, suscipit eveniet reiciendis voluptatibus dicta quidem odit cumque deserunt velit! Et vel, </p><p>eius odit, nam assumenda aperiam consequuntur eum veniam vitae, sed accusamus quos molestias dolorum impedit libero laudantium. Blanditiis, culpa, facilis autem eius eligendi quae fugit, rerum repudiandae vitae nam quisquam numquam inventore! Veritatis provident dolorum id, sapiente minus neque dignissimos quam reiciendis est quaerat </p><p>nihil architecto obcaecati cumque beatae quas error, quasi dolor. Laborum dolorum quod ad laudantium ea, iure dolorem. Eaque ipsum assumenda impedit vero asperiores, quia quod veniam tenetur incidunt magni quis laboriosam praesentium aliquid deserunt. Alias commodi molestiae nemo praesentium libero iusto, ipsa unde vero fuga debitis laudantium rem deleniti suscipit nihil ex quis numquam eligendi sapiente, voluptates consectetur iure fugit mollitia? Rerum ipsum architecto dignissimos recusandae ullam dolores, quibusdam possimus itaque voluptate amet accusantium quo, ad saepe sapiente eligendi ipsam suscipit nisi eos reiciendis hic, reprehenderit ratione! Quos corporis voluptatum voluptate officiis nam odio similique soluta nihil atque,quod ipsa autem cupiditate temporibus dignissimos quidem laborum qui aspernatur et!</p>',
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);
     }
}
