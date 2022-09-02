<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">
    <a class="navbar-brand" href="#">SANTA - COMANDAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="views/productoView.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Borrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Buscar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Modificar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Borrar todo</a>
        </li> 

        
        
      </ul>
    </div>
    <div class="navbar-nav ms-auto">
                <a href="proyecto-main/logout.php" class="nav-item nav-link">Salir</a>
            </div>
  </div>
</nav>
<script>
// Get the container element
var btnContainer = document.getElementById("navbarNav");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
