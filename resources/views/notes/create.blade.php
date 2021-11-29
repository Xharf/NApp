@extends('layouts.main')
@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <form action="" class="mt-5">
            <div class="mb-3">
              <input
                type="text"
                class="form-control border-0 fs-1 fw-bold"
                placeholder="Note Title"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control border-0"
                placeholder="Tag "
              />
            </div>

            <div class="mb-5">
              <textarea
                class="form-control border-0 text-dark"
                rows="6"
                placeholder="+ Tambahkan catatan yang muantap..."
              ></textarea>
            </div>
            <button type="button" class="btn fw-bold">Save Note</button>
            <a type="reset" class="btn fw-bold text-danger" href="{{url('')}}">
              Discard
            </a>
          </form>
        </div>
      </div>
    </div>
@endsection
