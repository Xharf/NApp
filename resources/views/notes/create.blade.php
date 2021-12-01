@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form action="{{ route('notes.store') }}" method="POST" class="mt-5"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input required type="text" class="form-control border-0 fs-1 fw-bold" placeholder="Note Title"
                            name="title">
                    </div>
                    <div class="mb-3">
                        <input required type="text" class="form-control border-0" placeholder="Tag" name="tags">
                    </div>

                    <div class="mb-3">
                        <textarea required class="form-control border-0 text-dark" rows="6" name="body"
                            placeholder="+ Tambahkan catatan yang muantap..."></textarea>
                    </div>
                    <div class="mb-5">
                        <input class="form-control" type="file" id="media" name="media">
                    </div>
                    <button type="submit" class="btn fw-bold">Save Note</button>
                    <a type="reset" class="btn fw-bold text-danger" href="{{ route('notes.index') }}">
                        Discard
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
