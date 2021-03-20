<?php
$mysqli = new mysqli("localhost","root","antares","book_data");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;  exit();
}

$customer = trim($_POST["customer"]);
$name = trim($_POST["name"]);
$price = trim($_POST["price"]);

$output="";
$where="";
$where_query= array();

if($customer!=""){
	$where_query[] = " customer_name like '%".$customer."%'";
}
if($name!=""){
	$where_query[] = " product_name like '%".$name."%'";
}
if($price!="" && $price!=0){
	$where_query[] = " product_price >= ".($price-1)." AND product_price <= ".($price+1)."";
}

if(sizeof($where_query)>0){
	foreach($where_query as $key=>$query){
		if($key==0){
			$where.=" WHERE ".$query;
		}
		else{
			$where.=" AND ".$query;
		}
	}
}

// echo $where; exit;

$result = $mysqli->query("select * from books ".$where);

if(mysqli_num_rows($result)==0){
	echo "<h5 class='threed font-weight-bold text-danger text-center'>No Books Found !<br><br> Please try with a different keyword...</h5>"; exit;
}

$table_head="<h5 class='threed font-weight-bold text-dark text-center'>List of Books</h5><table class='table table-dark table-striped table-hover'><thead><tr><th>S.No</th><th>Customer&nbsp;Name</th><th>Customer&nbsp;Email</th><th>Product&nbsp;Name</th><th>Published&nbsp;Date</th><th>Price</th></tr></thead><tbody>";

$i=1;
$total=0;
while($row = $result->fetch_assoc()) {
	$output.="<tr>";
	$output.="<td>".$i."</td>";
	$output.="<td>".$row["customer_name"]."</td>";
	$output.="<td>".$row["customer_mail"]."</td>";
	$output.="<td>".$row["product_name"]."</td>";
	$output.="<td>".date("d/m/Y",strtotime($row["sale_date"]))."</td>";
	$output.="<td>".$row["product_price"]."</td>";
	$output.="</tr>";
	$total = $total + $row["product_price"];
	$i++;
}

$output.="<tr><td colspan='5' class='bg-dark text-right'><h6>Total Price</h6></td><td class='bg-primary font-weight-bold'>".$total."</td></tr>";

$mysqli -> close();
echo $table_head.$output."</tbody></table>";
?>