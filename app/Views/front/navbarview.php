<!--Navigation bar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href='<?php echo base_url('principal') ?>'>JDM-Cars</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='aboutUs'>Sobre nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario y Catalogo
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="register">Registrarse</a></li>
            <li><a class="dropdown-item" href='login'>Ingresar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="catalog">Catalogo</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" role="button" href="acercaDe" >Acerca de</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--end navigation bar-->
