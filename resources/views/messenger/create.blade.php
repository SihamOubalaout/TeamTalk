@extends('layouts.master')
<style>
    body {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background-color: #00c0ef;
        padding: 80px;
        border-radius: 100px;
        margin-top: 10px; /* Ajouter une marge supérieure */
    }

</style>

@section('content')
    <h1>Create a new message</h1>
    <form action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject"
                       value="{{ old('subject') }}">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Message</label>
                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
            </div>
            <div class="form-group">
  <label for="fileInput">Pièce jointe</label>
  <input type="file" class="form-control-file" id="fileInput" name="attachment">
</div>


            <div class="form-group">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Select a recipiant</option>
    @forelse($users as $user)
      <option title="{{ $user->NomEmp }}" value="{{ $user->id }}">
        {{ $user->NomEmp }}
      </option>
    @empty
      <span>No users available.</span>
    @endforelse
  </select>
</div>


            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </div>
    </form>
@stop


