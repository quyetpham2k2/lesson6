# lesson 6: Xử lý chuỗi và ngoại lệ

- Xử lý chuỗi bằng Regular Expressions:

  - Dùng biểu thức chính quy (regex) để kiểm tra tính hợp lệ của các giá trị như email, tên tài khoản, số điện thoại, đảm bảo dữ liệu đầu vào đúng định dạng.

- Sử dụng ngoại lệ (Exceptions) trong PHP:

  - Cung cấp cách thức xử lý lỗi khi có sự cố xảy ra trong ứng dụng, như chia cho 0, với thông báo lỗi tùy chỉnh.

- Tính tương thích với phương thức kế thừa:

  - Khi kế thừa từ lớp Exception, phương thức \_\_toString() của lớp con phải tuân thủ kiểu trả về string để tương thích với lớp cha trong PHP 8 và các phiên bản cao hơn.

- Đảm bảo tính đúng đắn của dữ liệu:

  - Các phương thức như explode(), preg_match() hay throw new Exception() giúp xác thực, phân loại và xử lý dữ liệu nhập vào, đảm bảo tính chính xác và ổn định cho ứng dụng.
