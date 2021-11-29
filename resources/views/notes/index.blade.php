@extends('layouts.main')
@section('navbar')
    @include('layouts.navbar')
@endsection
@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-lg-3 col-sm-6 mb-3">
      <div class="card h-100 rounded-4 border-0 shadow-c">
        <img
          src="https://images.unsplash.com/photo-1637964336303-68078127e5fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Judul catatan yang panjang</h5>
          <p class="card-text text-truncate-container">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Doloremque veritatis doloribus, nostrum non nihil commodi, omnis
            sint sapiente impedit, blanditiis aliquam aperiam similique
            quis. Reprehenderit consectetur quam quo autem doloribus?
          </p>
        </div>
        <div class="card-footer border-0 bg-transparent mb-3">
          <a
            href="{{ url('/notes/1')}}"
            class="btn btn-outline-dark border-2 rounded-3 d-inline"
            >View Notes</a
          >
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-3">
      <div class="card h-100 rounded-4 border-0 shadow-c">
        <img
          src="https://images.unsplash.com/photo-1637964336303-68078127e5fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Judul catatan yang panjang</h5>
          <p class="card-text text-truncate-container">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Doloremque veritatis doloribus, nostrum non nihil commodi, omnis
            sint sapiente impedit, blanditiis aliquam aperiam similique
            quis. Reprehenderit consectetur quam quo autem doloribus?
          </p>
        </div>
        <div class="card-footer border-0 bg-transparent mb-3">
          <a
            href="#"
            class="btn btn-outline-dark border-2 rounded-3 d-inline"
            >View Notes</a
          >
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-3">
      <div class="card h-100 rounded-4 border-0 shadow-c">
        <img
          src="https://images.unsplash.com/photo-1637964336303-68078127e5fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Judul catatan yang panjang</h5>
          <p class="card-text text-truncate-container">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Doloremque veritatis doloribus, nostrum non nihil commodi, omnis
            sint sapiente impedit, blanditiis aliquam aperiam similique
            quis. Reprehenderit consectetur quam quo autem doloribus?
          </p>
        </div>
        <div class="card-footer border-0 bg-transparent mb-3">
          <a
            href="#"
            class="btn btn-outline-dark border-2 rounded-3 d-inline"
            >View Notes</a
          >
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-3">
      <div class="card h-100 rounded-4 border-0 shadow-c">
        <img
          src="https://images.unsplash.com/photo-1637964336303-68078127e5fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Judul catatan yang panjang</h5>
          <p class="card-text text-truncate-container">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Doloremque veritatis doloribus, nostrum non nihil commodi, omnis
            sint sapiente impedit, blanditiis aliquam aperiam similique
            quis. Reprehenderit consectetur quam quo autem doloribus?
          </p>
        </div>
        <div class="card-footer border-0 bg-transparent mb-3">
          <a
            href="#"
            class="btn btn-outline-dark border-2 rounded-3 d-inline"
            >View Notes</a
          >
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-3">
      <div class="card h-100 rounded-4 border-0 shadow-c">
        <img
          src="https://images.unsplash.com/photo-1637964336303-68078127e5fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Judul catatan yang panjang</h5>
          <p class="card-text text-truncate-container">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Doloremque veritatis doloribus, nostrum non nihil commodi, omnis
            sint sapiente impedit, blanditiis aliquam aperiam similique
            quis. Reprehenderit consectetur quam quo autem doloribus?
          </p>
        </div>
        <div class="card-footer border-0 bg-transparent mb-3">
          <a
            href="#"
            class="btn btn-outline-dark border-2 rounded-3 d-inline"
            >View Notes</a
          >
        </div>
      </div>
    </div>
  </div>
</div>
<a
  type="button"
  class="btn btn-dark position-fixed bottom-0 end-0 me-5 mb-5"
  href="{{url('/notes/create')}}"
>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="25"
    height="25"
    fill="currentColor"
    class="bi bi-plus-lg"
    viewBox="1 1 16 16"
  >
    <path
      fill-rule="evenodd"
      d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"
    />
  </svg>
  ADD Note
</a>
@endsection