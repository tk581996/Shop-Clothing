<?php 
		$conn = mysqli_connect("localhost","root","","btl");
		$sql = "SELECT * FROM donhang";
		$result = mysqli_query($conn,$sql);
?>
<table align="center" width="1061" height="108" border="1" style="margin-top:20px; border-collapse::collapse" >
  <tr>
    <th width="66" height="53" align="center" style="background-color:#000; color:#FFF">Mã Giỏ Hàng</th>
    <td width="186" align="center" style="background-color:#000; color:#FFF">Tên khách hàng</td>
    <td width="237" align="center" style="background-color:#000; color:#FFF">Tên sản phẩm</td>
    <td width="50" align="center" style="background-color:#000; color:#FFF">Size</td>
    <td width="50" align="center" style="background-color:#000; color:#FFF">Số lượng</td>
    <td width="123" align="center" style="background-color:#000; color:#FFF">Giá</td>
    <td width="122" align="center" style="background-color:#000; color:#FFF">Tổng tiền</td>
    <td width="175" align="center" style="background-color:#000; color:#FFF">Ngày mua hàng</td>
  </tr>
  <?php while($dong = mysqli_fetch_array($result)) { ?>
  <tr>
    <th width="66" height="47" align="center"><?php echo $dong['msgh'] ?></th>
    <td width="186" align="center"><?php echo $dong['tenkh'] ?></td>
    <td width="237" align="center"><?php echo $dong['tensp'] ?></td>
    <td width="50" align="center"><?php echo $dong['size'] ?></td>
    <td width="50" align="center"><?php echo $dong['soluong'] ?></td>
    <td width="123" align="center"><?php echo $dong['gia'] ?> đ</td>
    <td width="122" align="center"><?php echo $dong['tongtien'] ?> đ</td>
    <td width="175" align="center"><?php echo $dong['ngaythemdonhang'] ?></td>
  </tr>
  <?php } ?>
  
</table>
