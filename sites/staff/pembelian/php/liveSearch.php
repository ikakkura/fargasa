<?php
include $_SERVER['DOCUMENT_ROOT'].'/ref/koneksi.php';
$conn = new createCon();
$con = $conn->connect();

$keyword = $_GET['query'];
$jenis = $_GET['jenis'];
$rowName;
$query;
//versi lama
if (isset($keyword)) {
        if($jenis == 'tipe'){
            $query = "SELECT DISTINCT tipe from pembelian where tipe LIKE '%".trim($keyword)."%'";
            $rowName = 'tipe';
        }else if($jenis == 'mediator'){
            $query = "SELECT DISTINCT mediator from pembelian where mediator LIKE '%".trim($keyword)."%'";
            $rowName = 'mediator';
        }else{
            $query = "SELECT DISTINCT tipe from pembelian where merk LIKE '%".trim($keyword)."%'";
            $rowName = 'tipe';
        }
	
	$data = mysqli_query($con , $query);
	// $result = 
	$output = '';

	while($row = mysqli_fetch_array($data)) {
		$output .= '
                    <a class="src-value list-group-item list-group-item-action border border-dark" id="hasil">'.$row[$rowName].'</a>
		';
	}
//        <div class="list-group-item list-group-item-action">
	echo $output;

}


?>