<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

$id = isset( $_GET['id'] ) ? $_GET['id'] : '';

if( $_POST )
{

  header('Location: index.php');
  //die();
  $email = isset( $_POST['email'] ) ? $_POST['email'] : '';
  $password = isset( $_POST['password'] ) ? $_POST['password'] : '';

  update( $id, $email, $password );
  die();

}

$user = get_user_by_id( $id );

?>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Modifica registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <input type="text" name="email" value="<?php echo $user['email']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Contraseña
                      <input type="text" name="password" value="<?php echo $user['password']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <input type="submit" class="button success" value="MODIFICAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>