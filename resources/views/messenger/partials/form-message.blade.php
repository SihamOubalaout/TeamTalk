<h2>Add a new message</h2>
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}
        
    <!-- Message Form Input -->
    <div class="form-group">
        <textarea name="message" class="form-control">{{ old('message') }}</textarea>
    </div>

    @if($users->count() > 0)
<div class="form-group">
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
    <option selected>Add a recipient to chat</option>
    @foreach($users as $user)
    <option title="{{ $user->NomEmp }}" value="{{ $user->id }}">{{ $user->NomEmp }}</option>
    @endforeach
  </select>
</div>
@endif


    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </div>
</form>