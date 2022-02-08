<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

				User::create([
					'name' => 'Arya Wardana',
					'email' => 'aryawardanaan3@gmail.com',
					'password' => bcrypt('rahasia'),
				]);
				User::create([
					'name' => 'Wulan',
					'email' => 'wulan@gmail.com',
					'password' => bcrypt('rahasia'),
				]);

				Category::create([
					'name' => 'Antiga Programming',
					'slug' => 'antiga-programming',
				]);

				Category::create([
					'name' => 'Personal',
					'slug' => 'personal',
				]);

				Post::create([
					'title' => 'Judul Pertama',
					'slug' => 'judul-pertama',
					'excerpt' => 'orem ipsum dolor sit, amet consectetur adipisicing elit. Quam, mollitia numquam, tempore ducimus eum dignissimos voluptatem at repudiandae beatae ab accusamus voluptatum dolores in iusto reprehenderit inventore optio vitae impedit recusandae, alias harum.',
					'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, mollitia numquam, tempore ducimus eum dignissimos voluptatem at repudiandae beatae ab accusamus voluptatum dolores in iusto reprehenderit inventore optio vitae impedit recusandae, alias harum. Repellendus commodi vel cumque ipsam nobis at voluptate aliquam ad eaque, rem praesentium aperiam unde omnis incidunt neque, possimus labore nostrum laudantium quisquam eligendi fugiat magni, molestiae fuga! Repudiandae iste possimus quidem commodi molestias iusto, rem culpa facilis, ex rerum debitis nostrum dicta consequuntur, laborum voluptatibus! Harum rerum maiores quae, asperiores consequuntur assumenda vel suscipit. Excepturi hic libero, explicabo illum iste quas impedit perspiciatis atque numquam quae.',
					'category_id' => 1,
					'user_id' => 1
				]);

				Post::create([
					'title' => 'Judul Kedua',
					'slug' => 'judul-kedua',
					'excerpt' => 'orem ipsum dolor sit, amet consectetur adipisicing elit. Quam, mollitia numquam, tempore ducimus eum dignissimos voluptatem at repudiandae beatae ab accusamus voluptatum dolores in iusto reprehenderit inventore optio vitae impedit recusandae, alias harum.',
					'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, mollitia numquam, tempore ducimus eum dignissimos voluptatem at repudiandae beatae ab accusamus voluptatum dolores in iusto reprehenderit inventore optio vitae impedit recusandae, alias harum. Repellendus commodi vel cumque ipsam nobis at voluptate aliquam ad eaque, rem praesentium aperiam unde omnis incidunt neque, possimus labore nostrum laudantium quisquam eligendi fugiat magni, molestiae fuga! Repudiandae iste possimus quidem commodi molestias iusto, rem culpa facilis, ex rerum debitis nostrum dicta consequuntur, laborum voluptatibus! Harum rerum maiores quae, asperiores consequuntur assumenda vel suscipit. Excepturi hic libero, explicabo illum iste quas impedit perspiciatis atque numquam quae.',
					'category_id' => 1,
					'user_id' => 1
				]);

				Post::create([
					'title' => 'Judul Ketiga',
					'slug' => 'judul-ketiga',
					'excerpt' => 'orem ipsum dolor sit, amet consectetur adipisicing elit. Quam, mollitia numquam, tempore ducimus eum dignissimos voluptatem at repudiandae beatae ab accusamus voluptatum dolores in iusto reprehenderit inventore optio vitae impedit recusandae, alias harum.',
					'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, mollitia numquam, tempore ducimus eum dignissimos voluptatem at repudiandae beatae ab accusamus voluptatum dolores in iusto reprehenderit inventore optio vitae impedit recusandae, alias harum. Repellendus commodi vel cumque ipsam nobis at voluptate aliquam ad eaque, rem praesentium aperiam unde omnis incidunt neque, possimus labore nostrum laudantium quisquam eligendi fugiat magni, molestiae fuga! Repudiandae iste possimus quidem commodi molestias iusto, rem culpa facilis, ex rerum debitis nostrum dicta consequuntur, laborum voluptatibus! Harum rerum maiores quae, asperiores consequuntur assumenda vel suscipit. Excepturi hic libero, explicabo illum iste quas impedit perspiciatis atque numquam quae.',
					'category_id' => 2,
					'user_id' => 2
				]);
    }
}
