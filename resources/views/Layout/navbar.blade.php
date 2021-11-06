<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="#">FJ Shoe</a>
    </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
       <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Brand") ? 'active' : '' }}" href="/brand">Brand</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Shoe") ? 'active' : '' }}" href="/shoe">Shoe</a>
        </li>
      </ul>
        </div>
    </div>
  </nav>
