<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Prueba Codeigniter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <ul class="navbar-nav navbar-right">
      <?php if (!empty($_SESSION['is_logged_in'])): ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bienvenido <?php echo $_SESSION['email']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <?php else: ?>
        <a class="nav-link" href="#">Registrarse</a>
        <a class="nav-link" href="<?php echo base_url() ?>Login">Login</a>
      <?php endif;?>
    </ul>
  </div>
</nav>
<div class="container">
  <?php
if ($this->session->flashdata('mensaje_error') != null) {
    echo '<div class="alert alert-danger" role="alert">' . $this->session->flashdata('mensaje_error') . '</div>';
}

if ($this->session->flashdata('mensaje_success') != null) {
    echo '<div class="alert alert-success" role="alert">' . $this->session->flashdata('mensaje_success') . '</div>';
}
?>
</div>
