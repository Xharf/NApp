<nav
  class="
    navbar navbar-expand-lg navbar-light
    bg-white bg-light
    border-bottom border-2 border-dark
  "
  >
  <div class="container-fluid">
    <button
      class="navbar-toggler mb-3"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand fw-bold fs-3" href="#">Notes App</a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Login As ...</a>
        </li>

        @auth
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="d-inline nav-link border-0 bg-transparent fw-bold">Logout</button>
          </form>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link fw-bold" href="/login">Login</a>
        </li>
        @endguest
        
      </ul>
    </div>
  </div>
</nav>