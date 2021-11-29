@extends('layouts.main')
@section('content')
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
          <div class="mt-5">
            <h1 class="fs-1 fw-bold mb-4">Note Title</h1>
            <p class="text-secondary">Tag 1, tag 2</p>
            
            <div class="col-lg-5">
              <img
                src="https://images.unsplash.com/photo-1637964336303-68078127e5fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
                alt=""
                class="img-fluid mb-3"
              />
            </div>

            <div id="note-body">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Inventore odio quas ipsa, repudiandae dolorum beatae officia
                fugiat, non alias praesentium nobis magnam mollitia. Doloremque
                tempora nisi voluptate quaerat similique quod.
              </p>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Placeat praesentium unde hic, perspiciatis cum nulla. Eum quos
                rem doloribus, odit, voluptatem in perferendis tenetur,
                voluptates eligendi sunt magnam aliquid ab.
              </p>
            </div>
            <p class="fw-bold mb-0"> Owner: </p>
            <p class="mt-0"> Collaborator: </p>
            <a class="btn fw-bold text-dark fs-5" href="{{ url('notes/1/edit')}}">Edit Note</a>
        </div>
      </div>
    </div>
@endsection