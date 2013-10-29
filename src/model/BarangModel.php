<?php
if (!defined('USE_LOLI')) {
	echo "No direct access!";
	return;
}

class BarangModel {
	var $conn = null;
	
	public function __construct() {
		$conn = mysql_connect("localhost", "root","");
		if ($conn) {
			mysql_select_db("wdb", $conn);
		} 
	}
	public function select_by_category($cat, $limit) {
		$sqlstr = "SELECT * FROM barang WHERE `kategori` = '$cat' LIMIT $limit,10";
		
		$return = mysql_query($sqlstr);
		$fetch = mysql_fetch_row($return);
		
		$result = Array();
		
		if ($fetch)
			do {
				list($bid,$kategori,$nama,$kuantitas,$terjual_mingguan)=$fetch;
				$result[] = array( 
					"bid" => $bid,
					"kategori" => $kategori,
					"nama" => $nama,
					"kuantitas" => $kuantitas,
					"terjual_mingguan" => $terjual_mingguan
				);
			} while($fetch=mysql_fetch_row($return));
		
		return $result;
	}
	public function select_all($limit) {
		$sqlstr = "SELECT * FROM barang LIMIT $limit,10";
		
		$return = mysql_query($sqlstr);
		$result = mysql_fetch_row($return);
		
		return $result;
	}
	public function get_barang($bid) {
		$sqlstr = "SELECT * FROM barang WHERE `bid` = '$bid'";
		
		$return = mysql_query($sqlstr);
		$fetch = mysql_fetch_array($return);
		
		$result = null;
		
		if ($fetch)
			$result = $fetch;
		
		return $result;
	}
}


?>