<nav class="navbar z-1 position-fixed w-100 navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse ms-5 navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-bold" href="{{route('home')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-black ps-5" href="{{route('fumetti.index')}}">Lista fumetti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>