<?php
require_once "config.php";
require_once "menu.php";
?>



<html>
<div id="cadastro">
  <body>
     <head>
        <style>
        body {
            background-image: url("stdp_resultados01logo.jpg"), url("stdp_resultados02.jpg");
            background-repeat: no-repeat, repeat;
            background-size:100% auto;
        }
        </style>
      </head>    
    <table id="form_selecao" style="margin-left:100px">
	<form  method="post" > 
	<tr>
 	  <td style="font-weight:bold"> ETAPA: </td>
      <td> <select name="etapa" id="etapa" class="selectpicker" > 
       <option value="05">BAHIA SUP ECO 2016</option>  
       <option value="04">CIRCUITO NAUTICO SSA-IOS</option>     
       <option data-divider="true"></option>
       <option> ---- ETAPAS DE 2015 ----- </option>
       <option data-divider="true"></option>
       <option value="03">REGATA MARCILIO DIAS</option>     
		   <option value="02">MAX FORCE</option>
		   <option value="01">DESAFIO DOS FORTES</option>
      </td>
	</tr> 
    <tr>
	  <td style="font-weight:bold"> CATEGORIA: </td>
      <td> <select name="categoria" id="categoria" class="selectpicker" onchange="form.submit()">
        			      <option value="">Escolha uma abaixo</option>
                    <option value="00"> GERAL</option>
                    <option value="01"> KIDS MASCULINO</option>
                    <option value="02">KIDS FEMININO</option>
                    <option value="03">JUNIOR MASCULINO</option>
                    <option value="04"> JUNIOR FEMININO</option>
                    <option value="05">FUN RACE MASCULINO</option>
                    <option value="08">FUN RACE FEMININO</option>
                    <option value="06">FUN RACE MASCULINO MASTER</option>
                    <option value="07"> FUN RACE MASCULINO GRAN MASTER</option>
                    <option value="09">FUN RACE FEMININO MASTER</option>
                    <option value="10"> FUN RACE FEMININO GRAN MASTER</option>
                    <option value="11">RACE AMADOR MASCULINO</option>
                    <option value="24">RACE AMADOR MASCULINO MASTER</option>
                    <option value="25">RACE AMADOR MASCULINO G-MASTER</option>
                    <option value="12">RACE AMADOR FEMININO</option>
                    <option value="26">RACE AMADOR FEMININO MASTER</option>
                    <option value="27">RACE AMADOR FEMININO G-MASTER</option>                    
                    <option value="13">RACE 12'6 MASCULINO </option>
                    <option value="14">RACE 12'6 FEMININO </option>
                    <option value="15">RACE 12'6 MASTER MASC</option>
                    <option value="22">RACE 12'6 MASTER FEMININO</option>
                    <option value="16">RACE 12'6 G-MASTER MASC</option>
                    <option value="23">RACE 12'6 G-MASTER FEMININO</option>
                    <option value="17">RACE 14 MASC</option>
                    <option value="29">RACE 14 MASC MASTER</option>
                    <option value="30">RACE 14 MASC G_MASTER</option>
                    <option value="28">RACE 14 FEM</option>
                    <option value="31">RACE 14 FEM MASTER</option>
                    <option value="32">RACE 14 FEM G-MASTER</option>
                    <option value="19">PADDLE BOARD MASCULINO</option>
                    <option value="21">PADDLE BOARD FEMININO</option>
              <!--  <option value="19">PADDLE BOARD</option>
                    <option value="30">RACE 14 MASC G_MASTER</option>
                    <option value="32">RACE 14 FEM G-MASTER</option>
                    <option value="18">UNLIMIT</option>
                    <option value="34">CANOA HAVAIANA OC3 MASC</option> 
                    <option value="40">CANOA HAVAIANA OC1 FEM MASTER</option>
                    <option value="35">CANOA HAVAIANA OC3 FEM</option> -->
                    <option value="20">CANOA HAVAIANA OC1 MASC</option>
                    <option value="39">CANOA HAVAIANA OC1 MASC MASTER</option>
                    <option value="33">CANOA HAVAIANA OC1 FEM</option>
                    <option value="36">CANOA HAVAIANA OC6 MISTA</option>
      </select> </td>
     </tr>
<!--	  <td>
	      <input type="submit" name="action" value="PÓDIO" style="font-weight:bold" class="btn" id="btnCad">
	  </td>	  -->
	  
	 </form>
	 </table>
		    <br></br>
        <br></br>
        <br></br>
	</body>
</div>	
</html>


<?php
if (@$_POST['categoria'] !== null) {
	$id_etapa = $_POST['etapa'];		
	$id_categoria = $_POST['categoria'];
	$coluna = 1;



echo "<div class=container>
            <div class=row> ";
                $etapa = mysql_query("select * from etapa where idetapa='$id_etapa'");
                while ($result = mysql_fetch_assoc($etapa)){
                  echo '<br>';
                  echo '<h3 align="center">' . $result['nome_etapa'] . "  -  " . $result['local_etapa'] . '</h3>';
                  echo '<br>';
                  if ($id_categoria <> 0) {
                    $categoria = mysql_query("select * from categoria where idcategoria='$id_categoria'");
                    while ($result2 = mysql_fetch_assoc($categoria)){
                     echo '<br>';
                     echo '<h3 align="center">' . "RESULTADO -  " . $result2['descricao'] . '</h3>';
                     echo '<br>';
                    }
                  } else {
                      echo '<br>';
                      echo '<h3 align="center">' . "RESULTADO GERAL" . $cat . '</h3>';
                      echo '<br>';
                  } 
                } 
                  
              
 echo" </div>";
                    $count=1;
				      if ( $id_categoria <> 0) {
                       echo" <div class=row>
                         <table cellpadding=0  border=0   style=width:700px  align=center class=table table-striped table-bordered >
                         <thead>
                           <tr>
					         <th>Número</th>
					         <th>NOME</th>
                             <th>UF</th>
					         <th>TEMPO</th>
                             </tr>
                         </thead>
                         <tbody> ";
                      $sql = mysql_query("SELECT i.numero, p.nome, p.estado, i.tempo  FROM inscricao i join atleta p join categoria c 
                          WHERE i.etapa_idetapa ='$id_etapa' and i.categoria_idcategoria = '$id_categoria' and i.atleta_cpf = p.cpf and i.tempo <> '00:00:00' and i.categoria_idcategoria = c.idcategoria order by i.tempo");
					   while ($row = mysql_fetch_assoc($sql)){
                            echo '<tr>';
							               echo '<td>' . $row['numero'] . '</td>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['estado'] . '</td>';
						                echo '<td>'. $row['tempo'] . '</td>';
                            echo '</tr>';
                            $count++;
                        }	

                    }else {
                  echo" <div class=row>
                         <table cellpadding=0  border=0   style=width:700px  align=center class=table table-striped table-bordered >
                         <thead>
                           <tr>
					         <th>Número</th>
					         <th>NOME</th>
                             <th>UF</th>
                             <th>CATEGORIA</th>
					         <th>TEMPO</th>
                             </tr>
                         </thead>
                         <tbody> ";
                      $sql = mysql_query("SELECT i.numero, p.nome, p.estado, c.descricao, i.tempo  FROM inscricao i join atleta p join categoria c 
                          WHERE i.etapa_idetapa ='$id_etapa' and i.atleta_cpf = p.cpf and i.categoria_idcategoria = c.idcategoria and i.tempo <> '00:00:00' order by i.tempo");
                       while ($row = mysql_fetch_assoc($sql)){
                            echo '<tr>';
							             echo '<td>' . $row['numero'] . '</td>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['estado'] . '</td>';
                            echo '<td>'. $row['descricao'] . '</td>';
						                echo '<td>'. $row['tempo'] . '</td>';
                            echo '</tr>';
                            $count++;
                       }

                    }
                   	while ($row = mysql_fetch_assoc($sql)){
                            echo '<tr>';
							              echo '<td>' . $row['numero'] . '</td>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['estado'] . '</td>';
						                echo '<td>'. $row['tempo'] . '</td>';
                            echo '</tr>';
                            $count++;
                    }
                  
            echo"  </tbody>
            </table>
          </div>

</div>";


}
?>

