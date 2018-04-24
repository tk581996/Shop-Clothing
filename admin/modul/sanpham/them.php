<?php
		$conn = mysqli_connect("localhost","root","","btl");
		$sql = "SELECT * FROM danhmuc";
		$result = mysqli_query($conn,$sql);
?>
<form action="modul/sanpham/xuly.php" method="post">
  <table width="572" border="0" align="left">
      <tr>
        <th height="49" colspan="2" scope="row"><p style="font-size:30px;text-align:center;color:#F36;font-style:italic">THÊM SẢN PHẨM</p></th>
      </tr>
      <tr>
        <th width="170" height="41" align="right" style="height:30px" scope="row">Tên sản phẩm :</th>
        <td width="392"><input type="text" name="tensp" style="width:352px;height:28px;font-size:14px;padding-left:5px"></td>
      </tr>
      <tr>
        <th height="44" align="right" scope="row">Loại danh mục :</th>
        <td><select name="danhmuc" style="width:361px;height:28px;font-size:14px;padding-left:5px">
        	<?php while ($dong = mysqli_fetch_array($result)) { ?>
          		<option><?php echo $dong['tenloai'];?></option>
		  	<?php } ?>
        </select></td>
      </tr>
       <tr>
        <th height="48" align="right" scope="row">Ảnh:</th>
        <td><input type="file" name="anh" style="width:352px;height:28px;font-size:14px;padding-left:5px"></td>
      </tr>
      <tr>
        <th height="80" align="right" scope="row">Mô tả :</th>
        <td><textarea name="mota" cols="42" rows="6" style="width:352px;height:70px;font-size:14px;padding-left:5px"></textarea></td>
      </tr>
      <tr>
        <th height="38" align="right" scope="row">Giá :</th>
        <td><input type="text" name="gia" size="15" style="width:132px;height:28px;font-size:14px;padding-left:5px"> VNĐ</td>
      </tr>
      <tr>
        <th height="71" colspan="2" scope="row"><input type="submit" name="them" value="Thêm" style="background-color:#000; color:#FFF;font-size:16px; font-style:oblique; height:28px; width:82px"></th>
      </tr>
    </table>

</form>
