<?php
	$conn = mysqli_connect("localhost","root","","btl");
	$sql = "SELECT * FROM danhmuc WHERE msloai = '$_GET[msloai]'";
	$result = mysqli_query($conn,$sql);
	$dong = mysqli_fetch_array($result);
?>
<form action="modul/danhmuc/xuly.php?msloai=<?php echo $dong['msloai'] ?>" method="post" >
  <table width="542" style="float:left">
    <tr>
      <th height="110" colspan="2" scope="row"><p style="font-size:30px;text-align:center;color:#F36;font-style:italic">SỬA DANH MỤC SẢN PHẨM</p></th>
    </tr>
    <tr>
      <th width="158"><p style="font-size:17px; font-weight:100; text-align:left; color:#09C">Sửa tên danh mục:</p></th>
      <td width="372"><input type="text" name="tenloai" value="<?php echo $dong['tenloai'] ?>" style="width:352px;height:30px;font-size:14px;padding-left:5px"></td>
    </tr>
    <tr>
      <th width="158"><p style="font-size:17px; font-weight:100; text-align:left; color:#09C">Sửa mã số loại:</p></th>
      <td width="372"><input type="number" name="msloai" value="<?php echo $dong['msloai'] ?>" style="width:352px;height:30px;font-size:14px;padding-left:5px"></td>
    </tr>
    <tr>
      <th height="26" colspan="2" scope="row">
        <input type="submit" name="sua" value="Sửa" style="background-color:#000; color:#FFF;font-size:16px; font-style:oblique; height:28px; width:82px">
      </th>
    </tr>
    
  </table>

</form>