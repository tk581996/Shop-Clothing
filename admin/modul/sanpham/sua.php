<?php
	$conn = mysqli_connect("localhost","root","","btl");
	$sql = "SELECT * FROM sanpham WHERE mssp = '$_GET[mssp]'";
	$result = mysqli_query($conn,$sql);
	$dong = mysqli_fetch_array($result);
	// lấy thông tin từ danhmuc để in ra tên loại tin
	$sql1 = "SELECT * FROM danhmuc";
	$result1 = mysqli_query($conn,$sql1);
	
?>
<form action="modul/sanpham/xuly.php?mssp=<?php echo $dong['mssp'] ?>" method="post" >
<table width="614" border="0" align="left">
      <tr>
        <th height="39" colspan="2" scope="row"><p style="font-size:30px;text-align:center;color:#F36;font-style:italic">SỬA THÔNG TIN SẢN PHẨM</p></th>
      </tr>
      <tr>
        <th width="166" height="38" align="right" scope="row">Tên sản phẩm :</th>
        <td width="438"><input type="text" name="tensp" value="<?php echo $dong['tensp'] ?>" style="padding:5px;font-size:14px; width:360px"></td>
      </tr>
      <tr>
        <th height="38" align="right" scope="row">Loại danh mục :</th>
        <td><select name="danhmuc" style="padding:5px;font-size:14px; width:374px">
        	<?php while ($dong1 = mysqli_fetch_array($result1)) { ?>            
            	<?php if($dong['msloai'] == $dong1['msloai']) { ?>
          		<option selected="selected"><?php echo $dong1['tenloai'];?></option>
                <?php } else { ?>
                <option><?php echo $dong1['tenloai'];?></option>
                <?php } ?>
		  	<?php } ?>
        </select></td>
      </tr>
       <tr>
        <th height="122" align="right" scope="row">Ảnh</th>
            <td>
            	<img src="../images/product/<?php echo $dong['anh']?>" width="100" >
                <input type="file" name="anh">
            </td>
      </tr>
      <tr>
        <th height="92" align="right" scope="row">Mô tả :</th>
        <td><textarea name="mota" cols="42" rows="6" style="padding:5px;font-size:14px; width:360px; height:78px"><?php echo $dong['mota'] ?></textarea></td>
      </tr>
      <tr>
        <th height="34" align="right" scope="row">Giá :</th>
        <td><input type="text" name="gia" size="15" value="<?php echo $dong['gia'] ?>" style="padding:5px;font-size:14px"> VNĐ</td>
      </tr>
      <tr>
        <th height="41" colspan="2" scope="row"><input type="submit" name="sua" value="Sửa" style="background-color:#000; color:#FFF;font-size:16px; font-style:oblique; height:28px; width:82px"></th>
      </tr>
    </table>

</form>