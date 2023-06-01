<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>
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
        padding: 20px;
        border-radius: 200px;
        margin-top: 20px; /* Ajouter une marge supérieure */
    }

</style>
<div class="card" style="margin-bottom: 20px; background-color: #aaaaaa; border-radius: 5px;">
  <div class="card-body" >
<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->NomEmp }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>
</div>
</div>