<?php echo
	'<div class="container" style="

		padding: 16px;
		max-width: 700px;
		margin: 100px auto;
		border: 3px solid black;
	">';
try {
	//  display ============================================================================================

	// NOTE: code viết ở đây :)
	function isFirstLetterUpperCase($str)
	{
		$regexp = '/^[A-Z]/';
		if (preg_match($regexp, $str)) {
			echo "String: " . $str . "<br>";
			echo ("String's first character is uppercase <br><br>");
		} else {
			echo "String: " . $str . "<br>";
			echo ("String's first character is not uppercase! <br><br>");
		}
	}
	isFirstLetterUpperCase('Codegym');
	isFirstLetterUpperCase('cdegym');

	isFirstLetterUpperCase("Nguyen van Nam");
	isFirstLetterUpperCase("NGUYEN VAN NAM");
	isFirstLetterUpperCase("nguyen van Nam");

	// ============================================================================================
} catch (Error $e) {
	// } catch (Exception $e) {

	echo ' <br />
	<strong>
		Caught exception: ', $e->getMessage(), "
	</strong>
	<br />";

} finally {// không đặt cũng được, nhưng đặt finnally cho chắc :)
	echo '<a style="
		display: block;
		text-align: center;
		border: 1px solid black;
		text-decoration: none;
		color: black;
		font-weight: bold;
		margin-top: 16px;
		padding: 8px;
	" href="../">
		Trang chủ
	</a>';
}
echo '
</div>';
?>