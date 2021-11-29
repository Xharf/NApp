@extends('layouts.main')

@section('content')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 ">
          <form action="{{url('/notes/update')}}" class="my-5" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <input
                type="text"
                class="form-control border-0 fs-1 fw-bold"
                placeholder="Note Title"
                value="Tesstttt"
                required
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control border-0"
                placeholder="Tag "
                value="Tag1, Tag2, Tag3"
              />
            </div>

            <div class="mb-5">
              <textarea
                class="form-control border-0 text-dark"
                rows="6"
                placeholder="+ Tambahkan catatan yang muantap..."
              >
Lorem ipsum dolor sit, amet consectetur adipisicing elit.
Fugit nemo a labore porro quisquam nam quo vel. Doloremque
necessitatibus laudantium sed eius totam ipsum atque pariatur,
dignissimos sequi aperiam aliquam.
              </textarea>
            </div>
            
            <button type="submit" class="btn fw-bold">Save Note</button>
            <a class="btn fw-bold text-danger" href="{{ url('') }}"> Cancel </a>
            <button type="button" onclick="document.getElementById('del-form').submit();" class="btn fw-bold btn-danger">Delete</button>
          </form>
            <form id="del-form" action="{{ url('notes/1')}}" method="post" >
              @csrf
              @method('DELETE')
              
            </form>
          <h3>Collaborator:</h3>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <form action="x" method="POST">
                  <div class="input-group mb-3">
                    <button
                      class="btn btn-danger fw-bold"
                      type="input"
                      id="add-on-collaborator"
                    >
                      <i class="bi bi-person-x"></i>
                    </button>
                    <input
                      type="text"
                      class="form-control border-0"
                      placeholder="Add Collaborator"
                      value="Collaborator1"
                    />
                  </div>
                </form>
              </div>
              <div class="mb-5">
                <form action="x" method="POST">
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control border-0"
                      placeholder="Add Collaborator"
                    />
                    <button
                      class="btn btn-dark fw-bold"
                      type="submit"
                      id="add-on-collaborator"
                    >
                      <i class="bi bi-person-plus-fill"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

