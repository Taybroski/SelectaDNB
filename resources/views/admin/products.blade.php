@extends('layouts.app')

@section('content')

  <h1 class="text-muted text-center">Product Database</h1>

  <table class="table table-hover border text-center">
    <thead>
      <tr>  
        <th scope="col"><a href="#"><small class="underline">Select All</small></a></th>
        <th scope="col">ID</th>
        <th scope="col">Type</th>
        <th scope="col">Title</th>
        <th scope="col">Size</th>
        <th scope="col">Colour</th>
        <th scope="col">MPN</th>
        <th scope="col">Barcode</th>
        <th scope="col">QOH</th>
        <th scope="col">Cost</th>
        <th scope="col">Price</th>
        <th scope="col">Added</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>

      @if (count($products) > 0)
        @foreach ($products as $product)
          <tbody>
            <tr>
              <td><input type="checkbox"></td>
              <td>{{ $product->id }}</th>
              <td>{{ $product->type }}</td>
              <td>{{ $product->title }}</td>
              <td>{{ $product->size }}</td>
              <td>{{ $product->colour }}</td>
              <td>{{ $product->mpn }}</td>
              <td>{{ $product->barcode }}</td>
              <td>{{ $product->qoh }}</td>
              <td>&pound; {{ $product->trade }}</td>
              <td>&pound; {{ $product->price }}</td>
              <td>{{ str_limit($product->created_at, 10, $end = '') }}</td>
              <td><i class="fas fa-pen-square"></i></td>
              <td>
                <a id="deleteConfirm" href="/products/delete/{{ $product->id }}">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          </tbody>
        @endforeach      
      @endif
  </table>
@endsection