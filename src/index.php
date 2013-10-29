<?php
	define ('USE_LOLI', 'Lolicious');
	
	define ('LOLI_PATH', dirname(__FILE__));
	define ('LOLI_CONTROLLER_PATH', LOLI_PATH . '/controller');
	define ('LOLI_MODEL_PATH', LOLI_PATH . '/model');
	define ('LOLI_VIEW_PATH', LOLI_PATH . '/view');

	/*  Preprocess
	 *
	 *  Menentukan controller mana yang dipakai, berdasarkan input.
	 */
	 include("include.php");
	$Controller = null;
	$ctrl_obj = null;
	$title = "RuSerBa";
	$url = "/wbd";
	
	switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET': 	$the_request = &$_GET; break;
	case 'POST': 	$the_request = &$_POST; break;
	default:
	}
	
	if (!empty($the_request['do'])) {
		$parse = $the_request['do'];
		
		switch ($parse) {
		case 'window_shop':
		case 'detail':
			$controller = 'barang';
			break;
		case 'register':
			$controller = '';
			break;
		case 'profile':
			$contoller = '';
			break;
		case 'search':
			$controller = '';
			break;
		case 'logout':
			break;
		default:
		}
		
		if ($controller != null) {
			require LOLI_CONTROLLER_PATH . "/" . $controller . ".php";
			
			$ctrl_obj = new LoliController($the_request);
		}
	}
?>
<!DOCTYPE HTML>
<HTML class="no-js">
<HEAD>
	<META charset="UTF-8"/>
    <META name="viewport" content="width=device-width">
	<TITLE><?php echo $title; ?></TITLE>
	<LINK rel="stylesheet" type="text/css" href="./rsc/css/style.css">
	<SCRIPT type="text/javascript" src="./rsc/script.js"></SCRIPT>
</HEAD>
<BODY>
	<HEADER>
		<DIV class="loli-menu loli-menu-open loli-menu-horizontal loli-menu-blackbg">
			<A href="<?php echo $url; ?>" class="loli-menu-heading">RUKO SERBA ADA</A>
			<UL class="pull-right">
				<LI>
					<FORM name="searchbox" class="loli-form" action="index.php" method="get">
						<INPUT type="hidden" name="do" value="search" />
						<INPUT name="what" placeholder="Cari barang..." />
						<INPUT type="submit" value="cari" onsubmit="" />
					</FORM>
				</LI>
<?php	if (false):	?>
				<LI><A href="?do=profile">Welcome, <?php echo "Xathrya"; ?></A></LI>
				<LI><A href="">Shopping Bag</A></LI>
				<LI><A href="?do=logout">Logout</A></LI>
<?php	else:	?>
				<LI><A class="loli-button loli-button-primary" href="?do=register">Register</A></LI>
				<LI><A class="loli-button loli-button-primary" href="#">Login</A></LI>
<?php	endif;	?>
			</UL>
			<NAV class="loli-menu loli-menu-open loli-menu-horizontal loli-menu-blackbg">
				<UL>
					<LI><A href="?do=window_shop&cat=makanan_pokok">Makanan Pokok</A></LI>
					<LI><A href="?do=window_shop&cat=lauk">Lauk Pauk</A></LI>
					<LI><A href="?do=window_shop&cat=sayur">Sayuran</A></LI>
					<LI><A href="?do=window_shop&cat=buah">Buah</A></LI>
					<LI><A href="?do=window_shop&cat=minyak">Minyak</A></LI>
					<LI><A href="?do=window_shop&cat=bumbu">Bumbu Dapur</A></LI>
				</UL>
			</NAV>
		</DIV>
	</HEADER>

	<SECTION>
		<?php
		if ($ctrl_obj != null):
			$ctrl_obj->render();
		else:
		?>
		<DIV>
			<DIV class="loli-g-r">
				<DIV class="loli-u-1-2">
					<P>Makanan Pokok</P>
					<DIV class="loli-u-1-3">
						<P>1st Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>2nd Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>3rd Third</P>
					</DIV>
				</DIV>
				
				<div class="loli-u-1-2">
					<P>Lauk Pauk</P>
					<DIV class="loli-u-1-3">
						<P>1st Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>2nd Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>3rd Third</P>
					</DIV>
				</DIV>
				
				<DIV class="loli-u-1-2">
					<P>Sayur</P>
					<DIV class="loli-u-1-3">
						<P>1st Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>2nd Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>3rd Third</P>
					</DIV>
				</DIV>
				
				<DIV class="loli-u-1-2">
					<P>Buah</P>
					<DIV class="loli-u-1-3">
						<P>1st Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>2nd Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>3rd Third</P>
					</DIV>
				</DIV>
				
				<DIV class="loli-u-1-2">
					<P>Minyak</P>
					<DIV class="loli-u-1-3">
						<P>1st Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>2nd Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>3rd Third</P>
					</DIV>
				</DIV>
				
				<DIV class="loli-u-1-2">
					<P>Bumbu Dapur</P>
					<DIV class="loli-u-1-3">
						<P>1st Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>2nd Third</P>
					</DIV>
					<DIV class="loli-u-1-3">
						<P>3rd Third</P>
					</DIV>
				</DIV>
			</DIV>
		</DIV>
		<?php
		endif;
		?>
	</SECTION>

	<FOOTER>
		copyright © 2013 Lolicious 2/3 P1
	</FOOTER>
<?php
	// HEADER
?>
<?php
	// Controller
	if(isset($_GET['do'])) {
		$do = $_GET['do'];
		switch($do) {
			case "register" : {
				$Controller = new RegisterView();
				$Controller->output();
			} break;
		}
	}
?>
</BODY>
</HTML>
