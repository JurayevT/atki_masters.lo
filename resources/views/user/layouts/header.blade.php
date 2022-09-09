<nav class="navbar navbar-expand-lg  navbar-dark bg-danger">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">
        <b class="d-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
            <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
          </svg>
          {{-- <i class="bi bi-bank"></i> --}}
          <p class="m-0 ms-2">ATKI fakulteti</p>
        </b>
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Bosh sahifa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.index') }}">Yangiliklar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">E'lonlar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Tuzilma</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">Biz haqimizda</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Qirirish" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Qidir</button>
        </form>
      </div>
    </div>
  </nav>