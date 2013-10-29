<?php
if (!defined('USE_LOLI')) {
	echo "No direct access!";
	return;
}

require_once LOLI_MODEL_PATH . "/BarangModel.php";

class LoliController {
	var $request;
	var $model;
	
	public function __construct($the_request) {
		$this->request = $the_request;
		$this->model   = new BarangModel();
	}
	
	public function render() { ?>
	<DIV class="loli-g-r">
<?php	switch ($this->request['do']) {
		case 'window_shop':
			if (isset($this->request['cat'])) {
				$cat = 0;
				switch ($this->request['cat']) {
				case 'makanan_pokok':	$cat = 1;	break;
				case 'lauk':			$cat = 2;	break;
				case 'sayur':			$cat = 3;	break;
				case 'buah':			$cat = 4;	break;
				case 'minyak':			$cat = 5;	break;
				case 'bumbu':			$cat = 6;	break;
				}
				
				$result = $this->model->select_by_category($cat,0);
				
				foreach ($result as $res):?>
				<DIV class="loli-u-1-4">
					<A href="?do=detail&bid=<?php echo $res['bid']; ?>"><?php echo $res['nama']; ?></A>
				</DIV>
<?php			endforeach;
			}
			break;
		case 'detail':
			if (isset($this->request['bid'])) {				
				$result = $this->model->get_barang($this->request['bid']); ?>
				<DIV class="loli-u-1-2">
					<?php echo $result['nama']; ?>
				</DIV>
<?php		}
			break;
		} ?>
	</DIV>
<?php
	}
}

?>