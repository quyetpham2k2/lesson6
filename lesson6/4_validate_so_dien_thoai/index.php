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
	function validatePhoneNumber($phoneNumber)
	{
		$PHONE_PATTERN = '/^\(\d{2}\)-\(0\d{9}\)$/';
		return preg_match($PHONE_PATTERN, $phoneNumber) ? true : false;
	}

	$validPhoneNumbers = [
		"(84)-(0978489648)",
		"(01)-(0123456789)",
		"(99)-(0987654321)"
	];
	$invalidPhoneNumbers = [
		"(a8)-(0978489648)",    // Chứa ký tự không phải số
		"(84)-(978489648)",     // Thiếu chữ số trong phần sau
		"(84)0978489648",       // Thiếu dấu ngoặc
		"84-(0978489648)",      // Thiếu ngoặc ở mã quốc gia
		"(84)-(1234)"           // Quá ngắn
	];

	echo "Kiểm tra số điện thoại hợp lệ:<br>";
	foreach ($validPhoneNumbers as $phone) {
		echo $phone . " => " . (validatePhoneNumber($phone) ? "Hợp lệ" : "Không hợp lệ") . "<br>";
	}

	echo "<br>Kiểm tra số điện thoại không hợp lệ:<br>";
	foreach ($invalidPhoneNumbers as $phone) {
		echo $phone . " => " . (validatePhoneNumber($phone) ? "Hợp lệ" : "Không hợp lệ") . "<br>";
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