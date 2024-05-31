<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
   return view('posts', [
      'title' => 'Blog',
      'posts' => [
         [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Rafli Fahreza',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut modi unde quae expedita dolores repudiandae voluptatibus neque eaque quam, iusto, corrupti pariatur, quia accusamus. Iure saepe laboriosam ut eius! Sapiente!'
         ], [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Faiz Irwanda',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus modi quaerat dolorum eius vero magni dolore nulla earum id officia repudiandae perferendis velit autem, quidem exercitationem voluptatibus iusto eos, error recusandae dolores, voluptate similique itaque maxime temporibus! Ipsum, fugiat iste!'
         ]
      ]
   ]);
});

Route::get('/posts/{slug}', function ($slug) {
   $posts = [
      [
         'id' => 1,
         'title' => 'Judul Artikel 1',
         'slug' => 'judul-artikel-1',
         'author' => 'Rafli Fahreza',
         'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut modi unde quae expedita dolores repudiandae voluptatibus neque eaque quam, iusto, corrupti pariatur, quia accusamus. Iure saepe laboriosam ut eius! Sapiente!'
      ], [
         'id' => 2,
         'title' => 'Judul Artikel 2',
         'slug' => 'judul-artikel-2',
         'author' => 'Faiz Irwanda',
         'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus modi quaerat dolorum eius vero magni dolore nulla earum id officia repudiandae perferendis velit autem, quidem exercitationem voluptatibus iusto eos, error recusandae dolores, voluptate similique itaque maxime temporibus! Ipsum, fugiat iste!'
      ]
   ];

   $post = Arr::first($posts, function ($post) use ($slug) {
      return $post['slug'] == $slug;
   });

   return view('post', [
      'title' => 'Single Post',
      'post' => $post
   ]);
});

Route::get('/about', function () {
   return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
   return view('contact', ['title' => 'Contact']);
});
