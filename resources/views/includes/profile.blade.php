<div class="card">
  <div class="card-header">
      <p class="text-center">Dashboard</p>
  </div>

  <div class="card-body minh-40">
      <div class="f-row">
          <div class="col-md-8">
              <p class="text-muted">Orders: 9</p>
              <p class="text-muted">Tickets: 0</p>
              <p class="text-muted">Comments: 2</p>
              <p class="text-muted">Liked: 7</p>
              <p class="text-muted">Member Since: {{ str_limit(Auth::user()->created_at, 10, $end = '') }}</p>
          </div>
          <div class="col-md-4 text-right">
              <img src="https://picsum.photos/g/200/300/?random" alt="" class="img-thumbnail img-thumb">
          </div>
        </div>
      </div>
    <div class="card-footer text-right">
        @if ($role != 'customer')
            <a href="{{ url('/admin') }}">Admin Panel <i class="fas fa-arrow-alt-circle-right pl-2"></i></a>
        @else
            <a href="{{ url('/') }}">Home <i class="fas fa-arrow-alt-circle-right pl-2"></i></a>
        @endif
    </div>
</div>