<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Links</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
		}

		a {
			display: block;
			padding-bottom: 16px;
		}

		.container {
			padding: 16px;
			max-width: 500px;
			margin: 100px auto;
			border: 3px solid black;
		}
	</style>
</head>

<body>
	<div class="container">
		<a target="" href="1_kiem_tra_ky_tu_dau_tien_cua_chuoi_co_phai_la_chu_hoa_khong">
			1_kiem_tra_ky_tu_dau_tien_cua_chuoi_co_phai_la_chu_hoa_khong: [Thực hành] Kiểm tra ký tự đầu tiên của chuỗi
			có phải là chữ hoa không
		</a>

		<a target="" href="2_validate_email">
			2_validate_email: [Bài tập] Validate email
		</a>

		<a target="" href="3_validate_account">
			3_validate_account: [Bài tập] Validate account
		</a>

		<a target="" href="4_validate_so_dien_thoai">
			4_validate_so_dien_thoai: [Bài tập] Validate số điện thoại
		</a>

		<a target="" href="5_khai_bao_lop_exception">
			5_khai_bao_lop_exception: [Thực hành] Khai báo lớp exception tuỳ biến
		</a>
	</div>
</body>

<!-- NOTE: form code ở đây -->

<!-- 
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
-->

</html>