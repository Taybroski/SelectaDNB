@extends('layouts.app')

@section('content')

<div class="container">

	<div class="justify-content-center">
		<div class="f-row">
			{{-- Left sidebar --}}
			<div class="sidebar col-md-4" role="navigation">
				@include('admin.includes.sidebar')
			</div>
	
			{{-- Right card main --}}
			<div class="col-md-8">

        <div class="card">
          <div class="card-header">
            <p class="text-center">Change Header Image</p>
          </div>

          <div class="card-body minh-40">
            <div class="f-row">
              <div class="col-sm-7">
                <form action="ImagesController@store" method="POST" enctype="multipart/form-data" role="form">
                  {{ csrf_field() }}
                  <div class="form-control">
                    <label for="link" class="small">Choose Image</label>
                    <input type="file" name="link">
                    <input type="hidden" name="header" value="true">
                    <br><br>
                    <button type="submit" class="mb-2">Upload Image</button>
                  </div>
                </form>
              </div>

              <div class="col-sm-5">
                <p class="text-muted">
                  Upload a new header image here or choose from previously used images.
                </p>
              </div>
            </div>
            <br>
            {{-- Show a limited amount of previously used header images. --}}
            <table class="table">
              <tbody class="">
                @foreach ($headers as $img)
                  <tr class="align-items-center">
                    <td>
                      <img src="/storage/images/content/{{ $img->link }}" alt="" class="img-thumbnail">
                    </td>
                    <td class="vertical-align-middle horizontal minh-100">
                      <a href="/admin/image/update/{{ $img->id }}">
                        <i class="fas fa-image"></i>
                      </a>
                    </td>
                    <td class="vertical-align-middle horizontal minh-100">
                      <a id="deleteConfirm" href="/admin/image/delete/{{ $img->id }}">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
              <a href="{{ url('/home') }}">Visit Profile <i class="fas fa-arrow-alt-circle-right pl-2"></i></a>
          </div>
        </div>
			</div>
    </div>
</div> 
	
@endsection