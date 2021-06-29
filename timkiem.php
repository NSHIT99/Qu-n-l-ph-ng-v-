<h1>Tìm kiếm</h1>
<form action="" method="POST">
	<input type="text" name="nd">
	<input type="submit" name="xacnhan" value="Xác nhận">
</form>
<?php
	include("home.php");
	if (isset($_POST['xacnhan'])) {
		$nd = $_POST["nd"];
		$query = "SELECT * from sach where TenSach like '%$nd%'";
		$result = mysqli_query($connect, $query);
	if (mysqli_num_rows($result)>0) {
	echo "<table border=2>";
	echo "<tr>";
	echo "<td>Mã sách</td>";
	echo "<td>Mã loại</td>";
	echo "<td>Tên sách</td>";
	echo "<td>Tác giả</td>";
	echo "<td>NXB</td>";
	echo "<td>Số lượng</td>";
	echo "<td>Sửa</td>";
	echo "<td>Xóa</td>";
	echo "</tr>";
		while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$row["MS"]."</td>";
	echo "<td>".$row["MaLoai"]."</td>";
	echo "<td>".$row["TenSach"]."</td>";
	echo "<td>".$row["TacGia"]."</td>";
	echo "<td>".$row["NXB"]."</td>";
	echo "<td>".$row["SoLuong"]."</td>";
	echo "<td><a href='sua.php?MS=".$row["MS"]."'>Sửa</a></td>";
	echo "<td><a href='xoa.php?MS=".$row["MS"]."'>Xóa</a></td>";
	echo "</tr>";
		}
	echo "</table>";
}
}
?>