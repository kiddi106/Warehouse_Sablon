<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // Database Seeder
        User::create([
            'name'=>'Dicky Kurniawan',
            'username' => 'Dicky Admin',
            'email'=>'kiddi106@yahoo.com',
            'password'=>bcrypt('password'),
            'role' => 'user'
        ]);
        User::factory(3)->create();
// *
        Category::create([
            'name'=>'Astralon',
            'slug'=>'astralon'
        ]);
        Category::create([
            'name'=>'Biang',
            'slug'=>'biang'
        ]);
        Category::create([
            'name'=>'Binder',
            'slug'=>'binder'
        ]);
        Category::create([
            'name'=>'Bingkai',
            'slug'=>'bingkai'
        ]);
        Category::create([
            'name'=>'Bludru',
            'slug'=>'bludru'
        ]);
        Category::create([
            'name'=>'Bremol',
            'slug'=>'bremol'
        ]);
        Category::create([
            'name'=>'Bubuk',
            'slug'=>'bubuk'
        ]);
        Category::create([
            'name'=>'Catalis',
            'slug'=>'catalis'
        ]);
        Category::create([
            'name'=>'Catok',
            'slug'=>'catok'
        ]);
        
        Category::create([
            'name'=>'Cellosol',
            'slug'=>'cellosol'
        ]);
        Category::create([
            'name'=>'Coater',
            'slug'=>'coater'
        ]);
        Category::create([
            'name'=>'Coating',
            'slug'=>'coating'
        ]);
// *
        Category::create([
            'name'=>'Emulsifier',
            'slug'=>'emulsifier'
        ]);
        Category::create([
            'name'=>'Foam',
            'slug'=>'foam'
        ]);
        Category::create([
            'name'=>'Foil',
            'slug'=>'foil'
        ]);
        Category::create([
            'name'=>'Fosfor',
            'slug'=>'fosfor'
        ]);
        Category::create([
            'name'=>'Glitter',
            'slug'=>'glitter'
        ]);
        Category::create([
            'name'=>'Harter',
            'slug'=>'harter'
        ]);
        Category::create([
            'name'=>'Hot Gunt',
            'slug'=>'hot-gunt'
        ]);
        Category::create([
            'name'=>'Kaporit',
            'slug'=>'kaporit'
        ]);
        Category::create([
            'name'=>'Kayu',
            'slug'=>'kayu'
        ]);
        
        Category::create([
            'name'=>'Kipas',
            'slug'=>'kipas'
        ]);
        Category::create([
            'name'=>'Lakban',
            'slug'=>'lakban'
        ]);
        Category::create([
            'name'=>'Lem',
            'slug'=>'lem'
        ]);
// *
        Category::create([
            'name'=>'Letter',
            'slug'=>'letter'
        ]);
        Category::create([
            'name'=>'Medium',
            'slug'=>'mediun'
        ]);
        Category::create([
            'name'=>'Meja',
            'slug'=>'meja'
        ]);
        Category::create([
            'name'=>'Mesin',
            'slug'=>'mesin'
        ]);
        Category::create([
            'name'=>'Metanol',
            'slug'=>'metanol'
        ]);
        Category::create([
            'name'=>'MP',
            'slug'=>'mp'
        ]);
        Category::create([
            'name'=>'Mutiara',
            'slug'=>'mutiara'
        ]);
        Category::create([
            'name'=>'Pai',
            'slug'=>'pai'
        ]);
        Category::create([
            'name'=>'Pasta',
            'slug'=>'pasta'
        ]);
        
        Category::create([
            'name'=>'Pengencer',
            'slug'=>'pengencer'
        ]);
        Category::create([
            'name'=>'Pigment',
            'slug'=>'pigment'
        ]);
        Category::create([
            'name'=>'Plastisol',
            'slug'=>'plastisol'
        ]);
// *
        Category::create([
            'name'=>'Polisol',
            'slug'=>'polisol'
        ]);
        Category::create([
            'name'=>'Printol',
            'slug'=>'printol'
        ]);
        Category::create([
            'name'=>'Rainbow',
            'slug'=>'rainbow'
        ]);
        Category::create([
            'name'=>'Rukkel',
            'slug'=>'rukkel'
        ]);
        Category::create([
            'name'=>'Rubber',
            'slug'=>'rubber'
        ]);
        Category::create([
            'name'=>'Soda',
            'slug'=>'soda'
        ]);
        Category::create([
            'name'=>'Softhener',
            'slug'=>'softhener'
        ]);
        Category::create([
            'name'=>'Sparasi',
            'slug'=>'sparasi'
        ]);
        
        Category::create([
            'name'=>'Super',
            'slug'=>'super'
        ]);
        Category::create([
            'name'=>'Super Tex Sol',
            'slug'=>'super-tex-sol'
        ]);
        Category::create([
            'name'=>'Sweet',
            'slug'=>'sweet'
        ]);
        Category::create([
            'name'=>'Tembakan',
            'slug'=>'tembakan'
        ]);
        
        Category::create([
            'name'=>'Terpin',
            'slug'=>'terpin'
        ]);
        Category::create([
            'name'=>'Top',
            'slug'=>'top'
        ]);
        
        
        
        

        Post::factory(10)->create();

        // Post::create([
        //     'title'=>'Doraemon',
        //     'slug'=>'doraemon-1997',
        //     'excerpt'=>'Porro minus natus consequatur dignissimos eum neque mollitia tempora.',
        //     'body'=>'<p>Porro minus natus consequatur dignissimos eum neque mollitia tempora. </p><p> maiores fuga itaque velit dolorum, necessitatibus cum aut quo nam distinctio animi temporibus ab vel iste quae iusto eaque pariatur quas alias aliquid explicabo at voluptas delectus? Ipsa eligendi culpa eos, nemo minima laborum! Dolor voluptatem ducimus molestiae laboriosam nam quia labore error optio reiciendis nobis. Rerum reiciendis magni, omnis ducimus, laborum quam, molestiae tempore facilis iste quidem fuga itaque ipsum atque rem numquam distinctio libero provident asperiores eaque blanditiis veniam tenetur. Illum repudiandae, iusto corporis neque blanditiis numquam nobis est reiciendis.</p>',
        //     'category_id'=>2,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Dragon-Ball',
        //     'slug'=>'dragon-ball-1995',
        //     'excerpt'=>'Porro minus natus consequatur dignissimos eum neque mollitia tempora.',
        //     'body'=>'<p>Porro minus natus consequatur dignissimos eum neque mollitia tempora. </p><p> maiores fuga itaque velit dolorum, necessitatibus cum aut quo nam distinctio animi temporibus ab vel iste quae iusto eaque pariatur quas alias aliquid explicabo at voluptas delectus? Ipsa eligendi culpa eos, nemo minima laborum! Dolor voluptatem ducimus molestiae laboriosam nam quia labore error optio reiciendis nobis. Rerum reiciendis magni, omnis ducimus, laborum quam, molestiae tempore facilis iste quidem fuga itaque ipsum atque rem numquam distinctio libero provident asperiores eaque blanditiis veniam tenetur. Illum repudiandae, iusto corporis neque blanditiis numquam nobis est reiciendis.</p>',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Gintama',
        //     'slug'=>'gintama-1997',
        //     'excerpt'=>'Porro minus natus consequatur dignissimos eum neque mollitia tempora.',
        //     'body'=>'<p>Porro minus natus consequatur dignissimos eum neque mollitia tempora. </p><p> maiores fuga itaque velit dolorum, necessitatibus cum aut quo nam distinctio animi temporibus ab vel iste quae iusto eaque pariatur quas alias aliquid explicabo at voluptas delectus? Ipsa eligendi culpa eos, nemo minima laborum! Dolor voluptatem ducimus molestiae laboriosam nam quia labore error optio reiciendis nobis. Rerum reiciendis magni, omnis ducimus, laborum quam, molestiae tempore facilis iste quidem fuga itaque ipsum atque rem numquam distinctio libero provident asperiores eaque blanditiis veniam tenetur. Illum repudiandae, iusto corporis neque blanditiis numquam nobis est reiciendis.</p>',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Bleach',
        //     'slug'=>'bleach-1992',
        //     'excerpt'=>'Porro minus natus consequatur dignissimos eum neque mollitia tempora.',
        //     'body'=>'<p>Porro minus natus consequatur dignissimos eum neque mollitia tempora. </p><p> maiores fuga itaque velit dolorum, necessitatibus cum aut quo nam distinctio animi temporibus ab vel iste quae iusto eaque pariatur quas alias aliquid explicabo at voluptas delectus? Ipsa eligendi culpa eos, nemo minima laborum! Dolor voluptatem ducimus molestiae laboriosam nam quia labore error optio reiciendis nobis. Rerum reiciendis magni, omnis ducimus, laborum quam, molestiae tempore facilis iste quidem fuga itaque ipsum atque rem numquam distinctio libero provident asperiores eaque blanditiis veniam tenetur. Illum repudiandae, iusto corporis neque blanditiis numquam nobis est reiciendis.</p>',
        //     'category_id'=>2,
        //     'user_id'=>1

        // ]);
        
    }
}
