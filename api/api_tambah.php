<?php
require_once('../config/koneksi.php');
	$customer_name = $_POST['customer_name'][0];
    $product_name   = $_POST['product_name'][0];
    $product_id = 0;
    $payment_name   = $_POST['payment_name'][0];
    $payment_id = 0;
    $transaction_address_id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM customer_address WHERE id = (SELECT id FROM customer WHERE customer_name ='$customer_name')"));
    $transaction_address = '';
if (isset($_POST['customer_name']) && isset($_POST['product_name'][0]) && isset($_POST['payment_name'][0])) {
    if ($product_name == "Rokok"){
    	$product_id = 1;
    }
    if ($product_name == "Kerupuk"){
    	$product_id = 2;
    }
    if ($product_name == "Telor"){
    	$product_id = 3;
    }

    if ($payment_name == "Transfer Bank"){
    	$payment_id = 1;
    }
    if ($payment_name == "Gopay"){
    	$payment_id = 2;
    }
    if ($payment_name == "COD"){
    	$payment_id = 3;
    }

    if ($transaction_address_id['id'] == "1"){
    	$transaction_address ='Kebon Baru';
    }
    if ($transaction_address_id['id'] == "2"){
    	$transaction_address ='Kampung Melayu';
    }
    if ($transaction_address_id['id'] == "3"){
    	$transaction_address ='Tanjung Barat';
    }
    if ($transaction_address_id['id'] == "4"){
    	$transaction_address ='Kelapa Dua';
    }
    if ($transaction_address_id['id'] == "5"){
    	$transaction_address ='Lenteng Agung';
    }

	try {
		$sql = $conn->prepare("INSERT INTO `transactions` (`transaction_id`,`transaction_date`,`product_name`, `product_id`, `payment_name`, `payment_id`, `transaction_address`, `transaction_address_id`) 
		VALUES (?,?,?,?,?,?,?,?)");
		$sql->bind_param('idsisisi', $transaction_address_id['id'],date('Ymd'),$product_name, $product_id, $payment_name, $payment_id,$transaction_address,$transaction_address_id['id']);
		$sql->execute();
		echo '<script language="javascript">';
		echo 'alert("Transaction Data Added Successfully");';
		echo 'window.location ="../index.php"';
		echo '</script>';
	} catch (mysqli_sql_exception $e){
		echo '<script language="javascript">';
		echo 'alert("Duplicate Transaction");';
		echo 'window.location ="../index.php"';
		echo '</script>';
	}
} else {
	echo "GAGAL";
}