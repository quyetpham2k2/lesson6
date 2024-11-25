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
	include_once "DivideByZeroException.php";

	function divide($numerator, $denominator)
	{
		if ($denominator === 0) {
			throw new DivideByZeroException();
		}
		return $numerator / $denominator;
	}

	// $result = divide(100, 5);
	// echo "<br>" . $result;
	// $result = divide(100, 0);
	// echo "<br>" . $result;

	try {
		$result = divide(100, 5);
		echo "<br>" . $result;
		$result = divide(100, 0);
		echo "<br>" . $result;
	} catch (DivideByZeroException $e) {
		echo "<br>" . 'Có lỗi xảy ra: ' . $e;
	}

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