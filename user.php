<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
$result = run_query();
?>

<?php require_once('header.php'); ?>

<table align="center">
<br>
<br>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th>Correo</th>
                    <th width="150">Contraseña</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                while($user = $result->fetch_assoc())
                {
                  ?>
                  <tr>
                  <td><?php echo $user['id']; ?></td>
				  <td><?php echo $user['nombre']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['contraseña']; ?></td>
                  </tr>
                  <?php
                }
                ?>
                </tbody>
              </table> 
              <br>
<br>
<?php require_once('footer.php'); ?>
