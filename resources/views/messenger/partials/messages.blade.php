<div class="card" style="margin-bottom: 20px; background-color: #f8f8f8; border-radius: 5px;">
  <div class="card-body">
    <div class="media">
      <img src="{{ asset('/images/user.jpg') }}" class="img-fluid rounded" alt="{{ $message->user->NomEmp }}" class="mr-3 rounded-circle" style="width: 64px; height: 64px;">
      <div class="media-body">
        <h5 class="mt-0" style="font-size: 18px; font-weight: bold; color: #333;">{{ $message->user->NomEmp }}</h5>
        <p style="color:black; margin-bottom: 10px;">{{ $message->body }}</p>
        <div class="text-muted">
          <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
      </div>
    </div>
  </div>
</div>