<?
class RegisterView {
	public function output() {
		echo '<form action="" method="post">';
		echo	'<input placeholder="Username" />';
		echo	'<input placeholder="Password" />';
		echo	'<input placeholder="Confirm Password" />';
		echo	'<input type="submit" value="Register" />';
		echo '</form>';
	}
}
?>