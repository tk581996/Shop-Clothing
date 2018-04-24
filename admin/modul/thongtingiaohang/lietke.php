<?php 
		$conn = mysqli_connect("localhost","root","","btl");
		$sql = "SELECT * FROM thongtingiaohang";
		$result = mysqli_query($conn,$sql);
?>
<table align="center" width="1061" height="108" border="1" style="margin-top:20px; border-collapse::collapse" >
  <tr>
    <th width="72" height="53" align="center" style="background-color:#000; color:#FFF">Mã Giỏ Hàng</th>
    <td width="284" align="center" style="background-color:#000; color:#FFF">Tên người nhận</td>
    <td width="196" align="center" style="background-color:#000; color:#FFF">Số điện thoại</td>
    <td width="379" align="center" style="background-color:#000; color:#FFF">Địa chỉ</td>
    <td width="96" align="center" style="background-color:#000; color:#FFF">Quận huyện</td>
  </tr>
  <?php while($dong = mysqli_fetch_array($result)) { ?>
  <tr>
    <th width="72" height="47" align="center"><?php echo $dong['msgh'] ?></th>
    <td width="284" align="center"><?php echo $dong['nguoinhan'] ?></td>
    <td width="196" align="center"><?php echo $dong['sdt'] ?></td>
    <td width="379" align="center"><?php echo $dong['diachi'] ?></td>
    <td width="96" align="center"><?php echo $dong['thanhpho'] ?></td>
  </tr>
  <?php } ?>
  
</table>
