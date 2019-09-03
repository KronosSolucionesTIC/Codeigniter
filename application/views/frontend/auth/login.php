<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container">
  <div class="col-md-4 center-block no-float">
    <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $panel_title; ?></h3>
        </div>
        <div class="panel-body">
          <?php if (validation_errors()) {echo '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>';}?>

          <?php echo form_open('Signin'); ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electronico</label>
              <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="panel panel-primary">
  Prueba
</div>
