<?php
require_once('../config/koneksi.php');
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM transactions 
	INNER JOIN customer_address ON transactions.transaction_address_id = customer_address.id
	INNER JOIN customer ON customer_address.id = customer.id 
	ORDER BY transaction_id ASC")) {
    	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        	$myArray[] = $row;
    	}
	mysqli_close($conn);
    	echo json_encode($myArray);
}