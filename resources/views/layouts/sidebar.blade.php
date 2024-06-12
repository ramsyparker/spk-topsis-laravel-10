<div class="sidebar" id="side_nav">
  <div class="header-box px-2 pt-5 pb-2 d-flex justify-content-center">
    <h1 class="header-text rounded rounded-3 p-2 border border-1">
      <span class="me-2 text-white"><i class="ri-apps-line"></i>
        Metode Topsis
      </span>
    </h1>
  </div>
  <div class="list-box  d-flex flex-column justify-content-between gap-5">
    <ul class="list-unstyled px-3 pt-3 d-flex flex-column gap-2">
      <li class="rounded {{Request::segment(2) === 'dashboard' ? 'active' : ''}} rounded-2">
        <a href="{{route('dashboard')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-dashboard-line me-2"></i>Dashboard</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'criteria' ? 'active' : ''}} rounded-2">
        <a href="{{route('criteria')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-database-2-line me-2"></i>Data Kriteria</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'alternatives' ? 'active' : ''}} rounded-2">
        <a href="{{route('alternatives')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-team-line me-2"></i>Data Alternatif</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'grades' ? 'active' : ''}} rounded-2">
        <a href="{{route('grades')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-survey-line me-2"></i>Data Penilaian</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'calculations' ? 'active' : ''}} rounded-2">
        <a href="{{route('calculations')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-calculator-line me-2"></i></i>Data Perhitungan</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'results' ? 'active' : ''}} rounded-2">
        <a href="{{route('results')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-sort-asc me-2"></i></i>Data Hasil Akhir</a>
      </li>
    </ul>
    <ul class="list-unstyled px-3 d-flex flex-column gap-2">
      <!-- Tautan Lupa Kata Sandi -->
      <li class="rounded {{Request::segment(2) === 'forgot-password' ? 'active' : ''}} rounded-2">
        <a href="{{route('password.request')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-lock-password-line me-2"></i>Lupa Kata Sandi</a>
      </li>
      <!-- Tautan Logout -->
      <li class="rounded {{Request::segment(2) === 'logout' ? 'active' : ''}} rounded-2 ">
        <a href="{{route('signin.logout')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            class="ri-logout-circle-line me-2"></i>Logout</a>
      </li>
    </ul>
  </div>

  <hr class="h-color mx-3" />
</div>