<nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div class="container">
      <a class="navbar-brand" href="#">Prototype</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "Landing") ? 'active' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "About") ? 'active' : ''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "Category") ? 'active' : ''}}" href="/category">Category</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>