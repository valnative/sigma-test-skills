<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task-5</title>
</head>
<body>
<div id="app">
  <nav class="navbar navbar-light bg-white border-bottom sticky-top mb-5">
    <div class="container">
      <a class="navbar-brand mx-2" href="#">
        Store
      </a>
      <div class="navbar">
        <div class="container-fluid">
          <a class="nav-link p-0" href="wishlist.html">
            <button class="btn shadow-none cart-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart"
                   viewBox="0 0 16 16">
                <path
                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>
              <span class="badge bg-success mx-2 wishlist-counter">0</span>
            </button>
          </a>
          <a class="nav-link p-0" href="cart.html">
            <button class="btn shadow-none cart-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              <span class="badge bg-success mx-2 cart-counter">0</span>
            </button>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <main>
    <product-list></product-list>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer-content ms-lg-4">
        <span>© 2022</span>
        <br>
        <span>Designed by <a target="_blank" href="https://github.com/valnative">Valerii Yevdochenko</a></span>
      </div>
    </div>
  </footer>
</div>
<script src="js/main.js"></script>
</body>
</html>