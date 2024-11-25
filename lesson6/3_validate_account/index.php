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
	function validateAccount($account)
	{
		$ACCOUNT_PATTERN = '/^[_a-z0-9]{6,}$/';
		return preg_match($ACCOUNT_PATTERN, $account) ? true : false;
	}

	$validAccounts = [
		"123abc_",
		"_abc123",
		"______",
		"123456",
		"abcdefg"
	];
	$invalidAccounts = [
		".@",
		"12345",
		"1234_",
		"abcde"
	];

	echo "Kiểm tra tài khoản hợp lệ:<br>";
	foreach ($validAccounts as $account) {
		echo $account . " => " . (validateAccount($account) ? "Hợp lệ" : "Không hợp lệ") . "<br>";
	}

	echo "<br>Kiểm tra tài khoản không hợp lệ:<br>";
	foreach ($invalidAccounts as $account) {
		echo $account . " => " . (validateAccount($account) ? "Hợp lệ" : "Không hợp lệ") . "<br>";
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