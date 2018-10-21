<div class="card">
  <h1 class="text-muted text-center">
    @if ($role == 'customer')
      <i class="fas fa-user pr-2"></i>
      Welcome, {{ $name }}
    @elseif ($role == 'agent')
        <i class="fas fa-user-tie pr-2"></i>
        Welcome, {{ ucfirst(trans($role)) . ' ' . $name }}
    @elseif ($role == 'admin')
      <i class="fas fa-user-secret pr-2"></i>
      Welcome, {{ ucfirst(trans($role)) . ' ' . $name }}
    @endif
  </h1>
</div>