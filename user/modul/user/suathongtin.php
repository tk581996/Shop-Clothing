<?php 
		$id = $dong['id'];
		$sql_thanhvien_hientai = "SELECT * FROM thanhvien WHERE id = '$id'";
		$result_sql_thanhvien_hientai = mysqli_query($conn,$sql_thanhvien_hientai);
		$dong_result_sql_thanhvien_hientai = mysqli_fetch_array($result_sql_thanhvien_hientai);
?>
<div class="suathongtin">
<form action="modul/user/xuly.php?id=<?php echo $id?>" method="post">
<table width="355" border="0" style="margin-left:15%;margin-top:5%">
  <tr>
    <th height="28" colspan="2" scope="row"><p style="color:#36F;text-align:center; font-size:24px">THÔNG TIN CÁ NHẬN </p></th>
    </tr>
   <tr>
    <th height="80" colspan="2" scope="row"><p style="color:#CCC;text-align:center;font-style:italic; font-size:14px">NGƯỜI DÙNG </p></th>
    </tr>
  <tr>
    <th width="140" height="39" scope="row"><p>Họ tên</p></th>
    <td width="205"><input style="font-size:14px; font-style:italic" type="text" name="name" placeholder="<?php echo $dong_result_sql_thanhvien_hientai['name']?>"/></td>
  </tr>
  <tr>
    <th height="37" scope="row"><p>Email</p></th>
    <td style="font-style:italic"><?php echo $dong_result_sql_thanhvien_hientai['email']?></td>
  </tr>
  <tr>
    <th height="31" scope="row"><p>Password</p></th>
    <td style="font-style:italic"><?php echo $dong_result_sql_thanhvien_hientai['password']?></td>
  </tr>
  <tr>
    <th height="42" scope="row"><p>New password</p></th>
    <td><input type="password" name="password" style="font-size:16px"></td>
  </tr>
  <tr>
  <th height="66" colspan="2" scope="row" style="text-align:center">
        <input type="submit" name="update" style="background-color:#F9C; font-size:12px;" value="Cập nhật thông tin">
  </th>
  </tr>
</table>

</form>
</div>