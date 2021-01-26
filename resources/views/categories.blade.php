@extends('layouts.main')

@section('title','Categories')

@section('content')
  <table>
    <nav>
    <caption>Category list</caption>
    <thead>
      <tr>
        <th>Code</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
      <tr>
        <td>
          <a href="{{ route('category',['category'=>$category['code']]) }}" class="category">
          {{ $category['code'] }}
          </a>
        </td>
        <td class="category">
          {{ $category['name'] }}
       </td>
      </tr>
    @endforeach
    </tbody>
  </nav>
  </table>
@endsection