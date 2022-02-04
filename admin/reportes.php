
<?php
require_once 'config\config.php';
require_once 'lib\conexion\loginpdo.class.php';
require_once 'lib\errorreporting\errorreporting.class.php';
$er = new errorreporting(TRUE,TRUE,TRUE,TRUE);
$er->errorreporting();

$db = new loginpdo();

$db->comprobar("admin");


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Category</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

<body>


	<div class="wrapper">
		<div class="container">
			<div class="row">

			<div class="span11">
					<div  class="content">

						<div class="module">
							<div class="module-head">
								<h3>Reportes</h3>
							</div>




							<!--<form style="text-align:center" action="">-->
		  					<div style="text-align:center">
							<div class="form-group">
	<label class="control-label col-sm-2" for="hasta">Hasta:</label>
	<div class="col-sm-10">
  <input type="date" id="hasta" class="col-sm-10" name="hasta">
  </div>
    </div>
					
      
	<div class="form-group">
	<label class="control-label col-sm-2" for="desde">Desde:</label>
	<div class="col-sm-10">
  <input type="date" id="desde" class="col-sm-10" name="desde">
  </div>
    </div>


						
							<div class="form-group">
      <label class="control-label col-sm-2" for="idproducto">Sub-Categoria</label>
      <div class="col-sm-10">
        <input type="subcategoria" class="form-control" id="subcategoria" placeholder="Sub-Categoria" name="subcategoria">
      </div>
    </div>

		<div class="form-group">
      <label class="control-label col-sm-2" for="idproducto">Categoria</label>
      <div class="col-sm-10">
        <input type="categoria" class="form-control" id="categoria" placeholder="Categoria" name="categoria">
      </div>
    </div>


	<div class="form-group">
      <label class="control-label col-sm-2" for="idpedido">id. Pedido:</label>
      <div class="col-sm-10">
        <input type="idpedido" class="form-control" id="idpedido" placeholder="Enter pedido id" name="idpedido">
      </div>
    </div>
	<div class="form-group">
   






 </div>
	
<!--</form>-->






							<div class="module-body">








							<div class="row">
<div class="col-md-12">

<ol class="breadcrumb">
<!--<li><a href="todays-orders.php">REGRESAR</a></li>-->
<li class="active">Productos</li>
</ol>


</div> <!-- /col-md-12 -->
</div> <!-- /row -->








							<div class="col-md-2">


<div class="div-action " style="padding-bottom:20px;">
<center>
	
	<a href="javascript:reporteproductosshopping();" class="btn btn-danger" rol="button"><i class="glyphicon glyphicon-print" ></i>  Imprimir todos los productos</a>
	
	<a href="pdf/RptPedidoshoyshopping.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></i> Imprimir pedidos de hoy</button></a>
	


	<a href="pdf/RptProductosfavoritosshopping.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></i> Imprimir productos favoritos</button></a>
	</center>
</div> <!-- /div-action -->	
		  	
</div> <!-- /div-action -->	

</div>







<div class="row">
<div class="col-md-12">

<ol class="breadcrumb">

<li class="active">Pedidos</li>
</ol>


</div> <!-- /col-md-12 -->
</div> <!-- /row -->





<div class="col-md-2">

<div class="div-action " style="padding-bottom:20px;">
<center>
	
<a href="javascript:reportepedidossshopping();" class="btn btn-danger" rol="button"><i class="glyphicon glyphicon-print" ></i>  Imprimir todos los pedidos</a>
<a href="javascript:reportepedidossshoppingxid();" class="btn btn-danger" rol="button"><i class="glyphicon glyphicon-print" ></i>  Imprimir un pedido de un usuario por nombre o id (carta o mail)</a>
	

	<a href="pdf/RptPedidoshoyshopping.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></i> Imprimir pedidos de hoy</button></a>
	<a href="pdf/RptPedidospendientesshopping.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></i> Imprimir pedidos pendientes de confirmacion</button></a>
	<a href="pdf/RptPedidosentregadosshoppinng.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></i> Imprimir pedidos entregados</button></a>
	</center>
</div> <!-- /div-action -->	
		  	
</div> <!-- /div-action -->	

</div>





<div class="row">
<div class="col-md-12">

<ol class="breadcrumb">

<center><li class="active">Otros</li></center>
</ol>


</div> <!-- /col-md-12 -->
</div> <!-- /row -->





<div class="col-md-2">

<div class="div-action " style="padding-bottom:20px;">
<center>
	<a href="pdf/RptUsuariosshopping.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></ido>Imprimir usuarios</button></a>

	<a href="pdf/RptCatshopping.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></i> Imprimir categorias </button></a>
	<a href="pdf/RptSubcatshopping.php" title=""  target=”_blank” ><button class="btn btn-danger button1"  > <i class="glyphicon glyphicon-print"></i> Imprimir subcategorias </button></a>
	</center>

</div> <!-- /div-action -->	
		  	
</div> <!-- /div-action -->	

</div>









							


						</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->



	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
	



//funciones jagreen

function reporteproductosshopping(){
	var desde 	   = $('#desde').val();
		var hasta	   = $('#hasta').val();
		var categoria = $('#categoria').val();
		var subcategoria = $('#subcategoria').val();
		window.open('pdf/Rptproductosshopping.php?desde='+desde+'&hasta='+hasta+'&categoria='+categoria+'&subcategoria='+subcategoria);

	}

	function reportepedidossshopping(){
	var desde 	   = $('#desde').val();
		var hasta	   = $('#hasta').val();
		var categoria = $('#categoria').val();
		var subcategoria = $('#subcategoria').val();
		window.open('pdf/Rptpedidosshopping.php?desde='+desde+'&hasta='+hasta+'&categoria='+categoria+'&subcategoria='+subcategoria);

	}

	function reportepedidossshoppingxid(){

		var idpedido = $('#idpedido').val();
		window.open('pdf/Rptpedidosshoppingxid.php?idpedido='+idpedido);

	}
	





   

	</script>
<</body>

</html>