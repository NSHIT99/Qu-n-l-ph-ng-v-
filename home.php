<h1>Hiển thị thông tin</h1>
<?php 
	include("connect.php");
	$query="select * from sach";
	$result = mysqli_query($connect, $query);
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
	if (mysqli_num_rows($result)>0) {
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
	}
	echo "</table>";
?>
<a href="them.php">Thêm mới</a>