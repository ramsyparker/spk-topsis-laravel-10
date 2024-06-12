<nav class="navbar navbar-expand-md bg-light">
  <div class="container-fluid">
    <div class="d-flex justify-content-between d-md-none d-block">
      <a class="navbar-brand fs-5" href="#">Metode Topsis</a>
      <button class="btn px-1 py-0 open-btn">
        <i class="fas fa-stream"></i>
      </button>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-1 " aria-current="page" href="#"><i
              class='bx bxs-user-circle fs-1'></i> {{auth()->user()->name}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>