<?php
    require 'config.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $emailError = null;
        $estadoError = null;

        // keep track post values
        $nome_participante = $_POST['nome_participante'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
         
        // validate input
        $valid = true;
        if (empty($nome_participante)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
         
                
               
        // update data
        if ($valid) {
          mysql_query("UPDATE atleta  set nome='$nome_participante', data_nascimento='$data_nascimento', email='$email', estado='$estado' WHERE cpf='$id'");
          header("Location: listar_atleta.php");
        }
    } else {
        $sql = mysql_query("SELECT * FROM atleta where cpf=$id");
        while ($data=mysql_fetch_assoc($sql)){ 
          $nome_participante = $data['nome'];
          $data_nascimento = $data['data_nascimento'];  
          $email = $data['email'];
          $estado = $data['estado'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <br>
                        <br>
                        <h3 align="center">Alterar Atleta</h3>
                        <br>
                        <br>
                    </div>
             
                    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
          <input name="nome_participante" type="text"  placeholder="Name" value="<?php echo !empty($nome_participante)?$nome_participante:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                  
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Data de Nascimento</label>
                         <div class="controls">
          <input name="data_nascimento" type="date"  placeholder="Data de Nascimento" value="<?php echo !empty($data_nascimento)?$data_nascimento:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                  

                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      
                      <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                        <label class="control-label">Estado</label>
                        <div class="controls">
                            <input name="estado" type="text"  placeholder="Estado" value="<?php echo !empty($estado)?$estado:'';?>">
                            <?php if (!empty($mobileError)): ?>
                                <span class="help-inline"><?php echo $mobileError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
