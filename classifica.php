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
       <option value="20">PRIMEIRA ETAPA ABASUP - 2018</option>
       <option data-divider="true"></option>
       <option> ---- ETAPAS DE 2017 ----- </option>
       <option data-divider="true"></option>
       <option value="19">YACHT SUP RACE - 2017</option>
       <option value="17">ITACARE PADDLE RACE - 2017</option>
       <option value="14">BAHIA SUP RACE - 2017</option>
       <option value="13">MARCILIO DIAS - 2017</option>
       <option value="12">MORRO SUP FES - 2017</option>
       <option value="11">SUPBA INEMA - 2017</option>      
       <option value="10">REGATA SSA-IOS - 2017</option>
       <option data-divider="true"></option>
       <option> ---- ETAPAS DE 2016 ----- </option>
        <option data-divider="true"></option>
       <option value="07">YACHT CLUBE DA BAHIA - 2016</option>
       <option value="06">MAR DE ITACARÉ - 2016</option>
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
                    <option value="11">RACE 12'6 AMADOR MASCULINO</option>
                    <option value="24">RACE 12'6 AMADOR MASCULINO MASTER</option>
                    <option value="25">RACE 12'6 AMADOR MASCULINO G-MASTER</option>
                    <option value="12">RACE 12'6 AMADOR FEMININO</option>
                    <option value="26">RACE 12'6 AMADOR FEMININO MASTER</option>
                    <option value="27">RACE 12'6 AMADOR FEMININO G-MASTER</option>
                    <option value="53">RACE 14 AMADOR MASCULINO</option>
                    <option value="55">RACE 14 AMADOR MASCULINO MASTER</option>
                    <option value="56">RACE 14 AMADOR MASCULINO G-MASTER</option>
                    <option value="54">RACE 14 AMADOR FEMININO</option>
                    <option value="57">RACE 14 AMADOR FEMININO MASTER</option>
                    <option value="58">RACE 14 AMADOR FEMININO G-MASTER</option>
                    <option value="13">RACE 12'6 PRO MASCULINO </option>
                    <option value="14">RACE 12'6 PRO FEMININO </option>
                    <option value="15">RACE 12'6 PRO MASTER MASC</option>
                    <option value="22">RACE 12'6 PRO MASTER FEMININO</option>
                    <option value="16">RACE 12'6 PRO G-MASTER MASC</option>
                    <option value="23">RACE 12'6 PRO G-MASTER FEMININO</option>
                    <option value="17">RACE 14 PRO MASC</option>
                    <option value="29">RACE 14 PRO MASC MASTER</option>
                    <option value="30">RACE 14 PRO MASC G-MASTER</option>
                    <option value="28">RACE 14 PRO FEM</option>
                    <option value="31">RACE 14 PRO FEM MASTER</option>
                    <option value="32">RACE 14 PRO FEM G-MASTER</option>
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
                    <option value="43">CANOA HAVAIANA OC1 MASC G-MASTER</option>
                    <option value="33">CANOA HAVAIANA OC1 FEM</option>
                    <option value="40">CANOA HAVAIANA OC1 FEM MASTER</option>
                    <option value="44">CANOA HAVAIANA OC1 FEM G-MASTER</option>
                    <option value="49">CANOA HAVAIANA OC1 KIDS</option>
                    <option value="36">CANOA HAVAIANA OC6 MISTA</option>
                    <option value="45">CANOA HAVAIANA OC6 FEM</option>
                    <option value="46">CANOA HAVAIANA OC6 MASC</option>
                    <option value="52">SURFSKI MASCULINO</option>
                    <option value="59">SURFSKI MASTER MASC</option>
                    <option value="60">SURFSKI G-MASTER MASC</option>
                    <option value="61">SURFSKI FEMININO</option>
                    
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
                $etapa = mysqli_query($con,"select * from etapa where idetapa='$id_etapa'");
                while ($result = mysqli_fetch_assoc($etapa)){
                  echo '<br>';
                  echo '<h3 align="center">' . $result['nome_etapa'] . "  -  " . $result['local_etapa'] . '</h3>';
                  echo '<br>';
                  if ($id_categoria <> 0) {
                    $categoria = mysqli_query($con,"select * from categoria where idcategoria='$id_categoria'");
                    while ($result2 = mysqli_fetch_assoc($categoria)){
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
                   <th> #</th>        
					         <th>Número</th>
					         <th>NOME</th>
                             <th>UF</th>
					         <th>TEMPO</th>
                   <th>FILIADO</th>
                             </tr>
                         </thead>
                         <tbody> ";
                      $sql = mysqli_query($con,"SELECT i.numero, p.nome, p.estado, i.tempo, p.filiacao_abasup_2018  FROM inscricao i join atleta p join categoria c 
                          WHERE i.etapa_idetapa ='$id_etapa' and i.categoria_idcategoria = '$id_categoria' and i.atleta_cpf = p.cpf and i.tempo <> '00:00:00' and i.categoria_idcategoria = c.idcategoria order by i.tempo");
					             while ($row = mysqli_fetch_assoc($sql)){
                            echo '<tr>';
							              echo '<td>' . $count . '</td>';
                            echo '<td>' . $row['numero'] . '</td>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['estado'] . '</td>';
						                echo '<td>'. $row['tempo'] . '</td>';
                            if ($row['filiacao_abasup_2018']) {
                              echo '<td>'. "ok" . '</td>';
                            } else {
                              echo '<td>'. "-" . '</td>';
                            }
                            echo '</tr>';
                            $count++;
                        }	

                    }else {
                  echo" <div class=row>
                         <table cellpadding=0  border=0   style=width:700px  align=center class=table table-striped table-bordered >
                         <thead>
                           <tr>
                           <th> #</th> 
					                 <th>Número</th>
					                 <th>NOME</th>
                           <th>UF</th>
                           <th>CATEGORIA</th>
					                 <th>TEMPO</th>
                           <th>FILIADO</th>
                          </tr>
                         </thead>
                         <tbody> ";
                      $sql = mysqli_query($con,"SELECT i.numero, p.nome, p.estado, c.descricao, i.tempo, p.filiacao_abasup_2018  FROM inscricao i join atleta p join categoria c 
                          WHERE i.etapa_idetapa ='$id_etapa' and i.atleta_cpf = p.cpf and i.categoria_idcategoria = c.idcategoria and i.tempo <> '00:00:00' order by i.tempo");
                       while ($row = mysqli_fetch_assoc($sql)){
                            echo '<tr>';
                            echo '<td>' . $count . '</td>';
							             echo '<td>' . $row['numero'] . '</td>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['estado'] . '</td>';
                            echo '<td>'. $row['descricao'] . '</td>';
						                echo '<td>'. $row['tempo'] . '</td>';
                            if ($row['filiacao_abasup_2018']) {
                              echo '<td>'. "ok" . '</td>';
                            } else {
                              echo '<td>'. "-" . '</td>';
                            }
                            echo '</tr>';
                            $count++;
                       }

                    }
                   	while ($row = mysqli_fetch_assoc($sql)){
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

