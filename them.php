<h1>Thêm mới</h1>
<form action="them.php" method="POST">
	<table>
		<tbody>
			<tr>
				<td>Mã sách</td>
				<td><input type="text" name="MS"></td>
			</tr>
			<tr>
				<td>Mã loại</td>
				<td><input type="text" name="MaLoai"></td>
			</tr>
			<tr>
				<td>Tên sách</td>
				<td><input type="text" name="TenSach"></td>
			</tr>
			<tr>
				<td>Tác giả</td>
				<td><input type="text" name="TacGia"></td>
			</tr>
			<tr>
				<td>NXB</td>
				<td><input type="text" name="NXB"></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="text" name="SoLuong"></td>
			</tr>
			<tr>
				<td><input type="submit" name="xacnhan" value="Xác nhận"></td>
			</tr>
		</tbody>
	</table>
</form>
<?php
	if (isset($_POST['xacnhan'])) {
		$MS = $_POST["MS"];
		$MaLoai = $_POST["MaLoai"];
		$TenSach = $_POST["TenSach"];
		$TacGia = $_POST["TacGia"];
		$NXB = $_POST["NXB"];
		$SoLuong = $_POST["SoLuong"];
		include("connect.php");

		$query = "insert into sach(MS, MaLoai, TenSach, TacGia, NXB, SoLuong) values('', '$MaLoai', '$TenSach', '$TacGia', '$NXB', '$SoLuong')";
		if (mysqli_query($connect, $query)==true) {
			header("location:home.php");
		}
		else{
			echo "error";
		}
	}
?>