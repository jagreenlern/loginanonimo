<?php
	
	/* Connect To Database*/
//	require_once ("../conexion.php");
require_once '..\config\config.php';
require_once '..\lib\conexion\conexionpdo.class.php';
require_once '..\lib\errorreporting\errorreporting.class.php';
require_once '..\lib\paginar\paginar.class.php';
$er = new errorreporting(TRUE,TRUE,TRUE,TRUE);
$er->errorreporting();

$db = new conexionpdo();
$db->connect();
//$result = $db->query("SELECT * FROM tblprod");

//$db->querytabla  ("SELECT * FROM tblprod;","<tr><th>Id</th><th>Prod_code</th><th>Prod_name</th><th>Prod_ctry</th><th>Prod_qty</th><th>Price</th></tr>");
//$result = $db->query("insert into tblprod(prod_code,prod_name,prod_ctry,prod_qty,price) values(555,'test','test',2,1)","insert");
//$result = $db->query("UPDATE tblprod SET prod_ctry = 'value1' WHERE prod_name='test';","update");
//$result = $db->query("delete from tblprod where prod_name='test'","delete");


//$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){

$query=$_REQUEST['query'];
	$tables="tblprod";
	$campos="*";
	$sWhere=" tblprod.prod_name LIKE '%".$query."%'";
	$sWhere.=" order by tblprod.prod_name";
	
	
//	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = count($db->query("SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page"));
		//main query to fetch the data
		$resultado = $db->query("SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");	
		//loop through fetched data
	$numrows = count($resultado);

	//if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	//else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	
	//loop through fetched data
	


		
	
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>Código</th>
						<th>Producto </th>
						<th>Categoría </th>
						<th class='text-center'>Stock</th>
						<th class='text-right'>Precio</th>
						<th></th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						//$finales=0;
						//foreach(new TableRows(new RecursiveArrayIterator($resultado->fetchAll())) as $k=>$v) {
						//	echo $v;
							

							
// use the connection here
//$sth = $dbh->query('SELECT * FROM countries');

// fetch all rows into array, by default PDO::FETCH_BOTH is used
//$rows = $db->fetchAll();

// iterate over array by index and by name


    //printf("$k[0] $k[1] $k[2]\n");
    //echo $v['id'];
	//echo $v['prod_code'];
	//echo $v['prod_name'];


						while($row = $db->fetchAll()){
	
								$product_id=$row['id'];
								$prod_code=$row['prod_code'];
								$prod_name=$row['prod_name'];					
								$prod_ctry=$row['prod_ctry'];
								$prod_qty=$row['prod_qty'];
								$price=$row['price'];						
								$finales++;
						
							
						?>	
						<tr class="<?php echo $text_class;?>">
							<td class='text-center'><?php echo $prod_code;?></td>
							<td ><?php echo $prod_name;?></td>
							<td ><?php echo $prod_ctry;?></td>
							<td class='text-center' ><?php echo $prod_qty;?></td>
							<td class='text-right'><?php echo number_format($price,2);?></td>
							<td>
								<a href="#editProductModal"  data-target="#editProductModal" class="edit" data-toggle="modal" data-code='<?php echo $prod_code;?>' data-name="<?php echo $prod_name?>" data-category="<?php echo $prod_ctry?>" data-stock="<?php echo $prod_qty?>" data-price="<?php echo $price;?>" data-id="<?php echo $product_id; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
								<a href="#deleteProductModal" class="delete" data-toggle="modal" data-id="<?php echo $product_id;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                    		</td>
						</tr>
						<?php }?>
						<tr>
							<td colspan='6'> 
								<?php 
									$inicios=$offset+1;
									$finales+=$inicios -1;
									echo "Mostrando $inicios al $finales de $numrows registros";
									echo paginar::paginate( $page, $total_pages, $adjacents);
								?>
							</td>
						</tr>
				</tbody>			
			</table>
		</div>	

	
	
	<?php	
	}	
}
?>          
		  
