@extends('layouts.main')

@section('title')
<span class="category">{{ $category['name'] }}</span>
@endsection

@section('content')
  <table>
    <caption>Product list for <em class="category">{{ $category['name'] }}</em></caption>
    <thead>
      <tr>
        <th>Image</th>
        <th>Code</th>
        <th>Name</th>
      </tr>
    </thead> 
    <tbody>
    @foreach($products as $product)
     @if($product['catCode'] === $category['code'])
      <tr>
        <td>
          <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
               alt="The image of {{ $product['name'] }}."
               style="width: 64px;"/>
        </td>
        <td><a href="{{ route('product',['product'=>$product['code']]) }}" class="product">
            {{ $product['code'] }}
            </a>
        </td>    
        <td>{{ $product['name'] }}</td>
      </tr>
    @else
    @endif
   @endforeach
    </tbody>
  </table>
@endsection