@extends('layouts.main')

@section('title',$product['name'])

@section('content')
    <header>
      <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
           alt="The image of {{ $product['name'] }}."/>
    </header>
    <b>Code</b>: <em class="product">{{ $product['code'] }}</em><br />
    <b>Category</b>: <a href="{{ route('category',$product['catCode']) }}" class="category">  
                        {{ $categories[$product['catCode']]['name'] }}
                      </span>
                      </a>
    <br />
    <b>Name</b>: {{ $product['name'] }}
    <br />
    <pre>{{ $product['description'] }}</pre>
@endsection