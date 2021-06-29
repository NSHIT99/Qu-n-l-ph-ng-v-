<?php
		$MS = $_GET["MS"];
		include("connect.php");
		$query = "select * from sach where MS='$MS'";
		$result = mysqli_query($connect, $query);
		$row = mysqli_fetch_assoc($result);
?>
<h1>Sửa thông tin</h1>
<form action="" method="POST">
	<table>
		<tbody>
			<tr>
				<td>Mã sách</td>
				<td><input type="text" name="MS" value="<?php echo $MS ?>"></td>
			</tr>
			<tr>
				<td>Mã loại</td>
				<td><input type="text" name="MaLoai" value="<?php echo $row["MaLoai"] ?>"></td>
			</tr>
			<tr>
				<td>Tên sách</td>
				<td><input type="text" name="TenSach" value="<?php echo $row["TenSach"] ?>"></td>
			</tr>
			<tr>
				<td>Tác giả</td>
				<td><input type="text" name="TacGia" value="<?php echo $row["TacGia"] ?>"></td>
			</tr>
			<tr>
				<td>NXB</td>
				<td><input type="text" name="NXB" value="<?php echo $row["NXB"] ?>"></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="text" name="SoLuong" value="<?php echo $row["SoLuong"] ?>"></td>
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

		$query = "update sach set MaLoai='$MaLoai', TenSach='$TenSach', TacGia='$TacGia', NXB='$NXB', SoLuong='$SoLuong' where MS='$MS'";
		if (mysqli_query($connect, $query)==true) {
			header("location:home.php");
		}
		else{
			echo "error";
		}
	}
?>

