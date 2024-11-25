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

	function validateEmail($email)
	{
		$EMAIL_PATTERN = '/^[A-Za-z0-9]+[A-Za-z0-9._%+-]*@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';
		return preg_match($EMAIL_PATTERN, $email);
	}

	$validEmails = [
		"a@gmail.com",
		"ab@yahoo.com",
		"abc@hotmail.com"
	];
	$invalidEmails = [
		"@gmail.com",
		"ab@gmail.",
		"@#abc@gmail.com"
	];

	echo "Kiểm tra email hợp lệ:<br>";
	foreach ($validEmails as $email) {
		echo $email . " => " . (validateEmail($email) ? "Hợp lệ" : "Không hợp lệ") . "<br>";
	}

	echo "<br>Kiểm tra email không hợp lệ:<br>";
	foreach ($invalidEmails as $email) {
		echo $email . " => " . (validateEmail($email) ? "Hợp lệ" : "Không hợp lệ") . "<br>";
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