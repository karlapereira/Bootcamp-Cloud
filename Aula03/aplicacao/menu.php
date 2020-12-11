<?php include('s3-conf.php'); ?>
<nav class="navbar navbar-default" role="navigation" style="border:0px">

<div class="navbar-header">
<a class="navbar-brand" href="/"><img width="50" src="<?php echo $linkestatico?>/<?php echo $arqName ?>" /></a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="background-color:#555">
  <ul class="nav navbar-nav" style="padding:5px 0 5px 0" >
  <li class="list-group-item" style="background-color:red; border:1px solid #555">
        <a class=".text-white" style="color:#fff" href="load.php"><b>Cereja</b></a>
    </li>
    <li class="list-group-item" style="background-color:#000;border:1px solid #555">
      <a class=".text-white" style="color:#fff" href="rds.php">Banco de Dados</a>
    </li>
    <li class="list-group-item" style="background-color:#000;border:1px solid #555">
      <a class=".text-white" style="color:#fff" href="imagem.php">Imagens</a>
    </li>
  </ul>
</div>

</nav>
