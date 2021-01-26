@extends('layouts.main')

@section('title','Products')

@section('content')
  <table>
   <caption>Products list</caption>
   <thead>
     <tr>
       <th>Image</th>
       <th>Code</th>
       <th>Category</th>
       <th>Name</th>
     </tr>
   </thead>
   <tbody>
   @foreach($products as $product)
     <tr>
       <td>
         <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
              alt="The image of {{ $product['name'] }}." 
              style="width: 64px;"/>
       </td>
       <td>
          <a href="{{ route('product',['product'=> $product['code']]) }}" class="product">
          {{ $product['code'] }}
          </a>
       </td>
       <td>
          <a href="{{ route('category',$product['catCode']) }}" class="category"> 
          {{ $categories[$product['catCode']]['name'] }}  
          </a>
       </td>
       <td>{{ $product['name'] }}</td>
     </tr>
   @endforeach
   </tbody>
  </table>  
@endsection