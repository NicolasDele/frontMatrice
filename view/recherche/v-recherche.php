<body>
  <div id="loader" class="loader">
      <div class="loader-inner"></div>
  </div>
  <script src="/src/js/chargement.js" defer></script>
  <script src="/src/js/redirection.js" defer></script>

  <div class="container-center" id="rechercheContainer">
    <h3 class="recherche-titre">Recherche</h3>
    <div class="recherche-container">
        <ul class="recherche-list">
        </ul>
    </div>
  </div>
  <button class="fixed-button" ><a class="nav-link lienPost <?php if($menu['page'] == "creationPost") echo "active" ?>" aria-current="page" href="?url=creationPost">+ Nouveau post</a></button>

  <script src="/src/js/script-voirplus.js" defer></script>
</body>
