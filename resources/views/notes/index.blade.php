@extends('layouts.main')
@section('navbar')
    @include('layouts.navbar')
@endsection
@section('content')
    <div class="container mt-3">
        <div class="row">
            @forelse ($notes as $note)
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card h-100 rounded-4 border-0 shadow-c">
                        <img src="{{ $note->media }}" class="card-img-top rounded-4" alt="{{ $note->title }}" />
                        <div class="card-body card-max-height ">
                            <h5 class="card-title">{{ $note->title }}</h5>
                            <p class="card-text">
                                {!! $note->body !!}
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-transparent mb-3">
                            <a href="{{ route('notes.show', $note->id) }}"
                                class="btn btn-outline-dark border-2 rounded-3 d-inline">View
                                Notes</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">
                        <h4 class="alert-heading">No Notes Found</h4>
                        <p>
                            You have not created any notes yet.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    <a type="button" class="btn btn-dark position-fixed bottom-0 end-0 me-5 mb-5" href="{{ url('/notes/create') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-lg"
            viewBox="1 1 16 16">
            <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
        </svg>
        ADD Note
    </a>
@endsection
