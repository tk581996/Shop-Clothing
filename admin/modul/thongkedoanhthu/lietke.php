<?php 
		$conn = mysqli_connect("localhost","root","","btl");
		$sql_thongkedoanhthu ="INSERT INTO thongkedoanhthu(chotoinay)
						SELECT SUM(tongtien) FROM donhang 
						WHERE ngaythemdonhang < CURRENT_TIMESTAMP";
		mysqli_query($conn,$sql_thongkedoanhthu);

		$sql_sp = "SELECT tensp,SUM(soluong) FROM donhang
					GROUP BY tensp ORDER BY SUM(soluong) DESC LIMIT 1";
		$result_sql_sp = mysqli_query($conn,$sql_sp);
		$dong_sql_sp = mysqli_fetch_array($result_sql_sp);
		$sp = $dong_sql_sp['tensp'];
		$sql_sp ="INSERT INTO thongkedoanhthu(spmuanhieunhat) VALUES('$sp')";
		
		$sql = "SELECT * FROM thongkedoanhthu";
		$result = mysqli_query($conn,$sql);
?>
<table align="center" width="1061" height="108" border="1" style="margin-top:20px; border-collapse::collapse" >
  <tr>
    <th width="72" height="53" align="center" style="background-color:#000; color:#FFF">Doanh thu cho tới hiện tại</th>
    <td width="284" align="center" style="background-color:#000; color:#FFF">Sản phẩm được mua nhiều nhất</td>
    <td width="196" align="center" style="background-color:#000; color:#FFF">Thời gian thống kê</td>
  </tr>
  <?php while($dong = mysqli_fetch_array($result)) { ?>
  <tr>
    <th width="72" height="47" align="center"><?php echo $dong['chotoinay'] ?>.000</th>
    <td width="284" align="center"><?php echo $dong['spmuanhieunhat'];
										 echo $dong_sql_sp['tensp'] ?></td>
    <td width="196" align="center"><?php echo $dong['ngaythongke'] ?></td>
  </tr>
  <?php } ?>
  
</table>
