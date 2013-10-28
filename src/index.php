<?php
	/*  Preprocess
	 *
	 *  Menentukan controller mana yang dipakai, berdasarkan input.
	 */
	 include("include.php");
	$Controller = null;
	
	$title = "Portal Ruko Serba Ada - RuSerBa";
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
		<NAV class="loli-menu loli-menu-open loli-menu-horizontal loli-menu-blackbg">
			<A href="<?php echo $url; ?>" class="loli-menu-heading">RUKO SERBA ADA</A>
			<UL class="pull-right">
				<LI>
					<FORM action="" method="get">
						<INPUT placeholder="Cari barang..." />
						<INPUT type="submit" value="cari" />
					</FORM>
				</LI>
<?php	if (false):	?>
				<LI><A href="?do=profile">Welcome, <?php echo "Xathrya"; ?></A></LI>
				<LI><A href="?do=logout">Logout</A></LI>
<?php	else:	?>
				<LI><A href="?do=register">Register</A>
				</LI><LI><A href="#">Login</A></LI>
<?php	endif;	?>
			</UL>
		</NAV>
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
	</HEADER>

	<SECTION>
	<?php
		// View
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