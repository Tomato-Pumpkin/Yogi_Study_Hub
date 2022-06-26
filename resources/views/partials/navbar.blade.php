<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home" ? "active" : "") }}" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/user">Tabel User</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/barang">Tabel Barang</a></li>              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "transaksi" ? "active" : "") }}" href="/transaksi">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "about" ? "active" : "") }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "login" ? "active" : "") }}" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
