<?php

use Illuminate\Support\Facades\Route;

$products = [   
    'BK001' => [ 'code' => 'BK001', 'catCode' => 'CT001',
                 'name' => 'Programming PHP',
                 'description' => <<<EOT
                  Why is PHP the most widely used programming language on the web?
                  This updated edition teaches everything you need to know to create
                  effective web applications using the latest features in PHP 7.4.
                  You’ll start with the big picture and then dive into:
                  language syntax
                  programming techniques
                  and other details
                  using examples that illustrate both correct usage and common idioms.
                  EOT
                  ],
    'BK002' => [  'code' => 'BK002', 'catCode' => 'CT002',
                  'name' => 'JavaScript: The Definitive Guide',
                  'description' => <<<EOT
                  JavaScript is the programming language of the web and is used by more
                  software developers today than any other programming language.
                  For nearly 25 years this best seller has been the go-to guide for
                  JavaScript programmers. The seventh edition is fully updated to cover
                  the 2020 version of JavaScript, and new chapters cover:
                  classes
                  modules
                  iterators
                  generators
                  Promises
                  async/await
                  and metaprogramming.
                  You’ll find illuminating and engaging example code throughout.
                  EOT
               ],
    'BK003' => [ 'code' => 'BK003', 'catCode' => 'CT001',
                 'name' => 'Learning PHP, MySQL & JavaScript',
                 'description' => <<<EOT
                  Build interactive, data driven websites with the potent combination
                  of open source technologies and web standards, even if you have only
                  basic HTML knowledge. In this update to this popular hands on guide,
                  you’ll tackle dynamic web programming with the latest versions of
                  today’s core technologies:
                  PHP
    
                  Practice 954240 02/2563 Lab 03 Blade Control Flow Directives
    
                  2/3
     
                  MySQL
                  JavaScript
                  CSS
                  HTML5
                  and key jQuery libraries.
                  EOT
                ],
    'BK004' => [  'code' => 'BK004', 'catCode' => 'CT003',
                  'name' => 'Python Crash Course, 2nd Edition',
                  'description' => <<<EOT
                   In the first half of the book, you'll learn basic programming concepts,
                   such as variables, lists, classes, and loops, and practice writing
                   clean code with exercises for each topic. You'll also learn how to make
                   your programs interactive and test your code safely before adding it to
                   a project. In the second half, you'll put your new knowledge into
                   practice with three substantial projects:
                   a Space Invaders-inspired arcade game
                   a set of data visualizations with Python's handy libraries
                   and a simple web app you can deploy online.
                   EOT
                ],
];

$categories = [
  'CT001' => ['code' => 'CT001', 'name' => 'PHP'],
  'CT002' => ['code' => 'CT002', 'name' => 'JavaScript'],
  'CT003' => ['code' => 'CT003', 'name' => 'Python'],
];


Route::get('/product', function () use ($products,$categories){
  return view('products', [
      'products' => $products,
      'categories' => $categories,
  ]);
  })->name('products');

Route::get('/product/{product}', function ($productCode) use ($products,$categories){
  return view('product', [
      'product' => $products[$productCode],
      'categories' => $categories,
  ]);
  })->name('product');

Route::get('/category', function () use ($categories){
  return view('categories', [
      'categories' => $categories,
  ]);
  })->name('categories');

Route::get('/category/{category}', function ($categoryCode) use ($categories,$products){
  return view('category', [
      'category' => $categories[$categoryCode],
      'products' => $products,
  ]);
  })->name('category');