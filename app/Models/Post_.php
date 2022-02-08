<?php

namespace App\Models;

use PhpParser\Node\Expr\FuncCall;

class Post 
{
	private static $blog_posts = [
		[
			"title" => "Judul Post Pertama",
			"slug" => "judul-post-pertama",
			"author" => "Arya Wardana",
			"body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, fuga! Ratione, ut quo soluta at impedit est! In quam quaerat incidunt aperiam ducimus expedita aspernatur sit doloremque? Porro cumque dolorem exercitationem ullam, ipsum voluptate, labore sit fuga debitis ipsam quos ipsa veniam voluptas molestias modi officia explicabo! Nisi eveniet debitis quis sint minus corrupti similique necessitatibus modi, provident distinctio accusantium, eaque dolore voluptatibus magni doloremque fugit voluptatum, soluta sit assumenda maxime! Enim voluptates delectus corrupti distinctio ad nulla eum voluptatum."
		],
		[
			"title" => "Judul Post Kedua",
			"slug" => "judul-post-kedua",
			"author" => "si Anu",
			"body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, fuga! Ratione, ut quo soluta at impedit est! In quam quaerat incidunt aperiam ducimus expedita aspernatur sit doloremque? Porro cumque dolorem exercitationem ullam, ipsum voluptate, labore sit fuga debitis ipsam quos ipsa veniam voluptas molestias modi officia explicabo! Nisi eveniet debitis quis sint minus corrupti similique necessitatibus modi, provident distinctio accusantium, eaque dolore voluptatibus magni doloremque fugit voluptatum, soluta sit assumenda maxime! Enim voluptates delectus corrupti distinctio ad nulla eum voluptatum."
		],
	];

	public static function all() {
		return collect(self::$blog_posts);
	}

	public static function find($slug) 
	{
		$posts = static::all();

		// $post = [];
		// foreach($posts as $p) {
		// 	if($p["slug"] === $slug) {
		// 		$post = $p;
		// 	}
		// }

		return $posts->firstWhere('slug',$slug);
	}
}
