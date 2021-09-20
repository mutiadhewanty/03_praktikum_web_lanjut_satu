<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mutia & Dwiary BLOG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}"  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "About") ? 'active' : '' }}"" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Product") ? 'active' : '' }}"" href="/product/product">Product 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Product1") ? 'active' : '' }}"" href="/product/product1">Product 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "News") ? 'active' : '' }}"" href="/news/Halaman News">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Program") ? 'active' : '' }}"" href="/program/program">Program 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Program1") ? 'active' : '' }}"" href="/program/program1">Program 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Contact") ? 'active' : '' }}"" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>