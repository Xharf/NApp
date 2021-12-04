@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9">
                <div class="mt-5">
                    <h1 class="fs-1 fw-bold mb-4">{{ $note->title }}</h1>
                    <p class="text-secondary">{{ $note->tags }}</p>

                    <div class="col-lg-5">
                        <img src="{{ $note->media }}" alt="" class="img-fluid mb-3" />
                    </div>

                    <div id="note-body">
                        {!! $note->body !!}
                    </div>
                    <p class="fw-bold mb-0"> Owner: {{ $note->user->fullname }}</p>
                    <p class="mt-0"> Collaborator: - </p>
                    <a class="btn fw-bold text-dark fs-5" href="{{ route('notes.edit', $note->id) }}">Edit Note</a>
                </div>
            </div>
        </div>
    @endsection
