<?php 
		$id = $dong['id']; // id user
		$sql = "SELECT * FROM giohang NATURAL JOIN sanpham WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);
		
?>

<form action="modul/user/xuly.php?id=<?php echo $id ?>" method="post">
<table width="811" height="609" border="1" style="margin-top:50px; margin-left:20%;border-collapse:collapse" >
  <tr>
    <th height="45" colspan="7" align="center" style="color:#09F; font:'Times New Roman', Times, serif; text-align:center; font-size:36px">GIỎ HÀNG</th>
  </tr>
  <tr>
    <th height="101" colspan="7" align="center" style="color:#CCC; font:'Times New Roman', Times, serif; font-style:italic; text-align:center; font-size:12px">GIỎ HÀNG CỦA BẠN</th>
  </tr>
  <tr>
    <th width="171" height="79" style="text-align:center;border-bottom:1px solid #666">Sản phẩm</th>
    <td width="118" style="text-align:center;border-bottom:1px solid #666">Số lượng</td>
    <td width="109" style="text-align:center;border-bottom:1px solid #666">Size</td>
    <td width="140" style="text-align:center;border-bottom:1px solid #666">Giá</td>
    <td width="150" style="text-align:center;border-bottom:1px solid #666">Tổng tiền</td>
  </tr>
  <?php 
  $tongtien = 0;
  while($dong = mysqli_fetch_array($result)) { ?>
  <tr>
    <th width="171" height="141" style="text-align:center; border-bottom:1px solid #666;padding-top:20px">
    	<a href="cuahang.php?ac&msloai&mssp=<?php echo $dong['mssp'] ?>"> 
        		<img src="../images/product/<?php echo $dong['anh'] ?>" height="100"> 
                <br />
                <br />
				<p style="font-size:24px;color:#F69;text-align:center"><?php echo $dong['tensp']?> </p>
                <br />
        </a></th>
    <td width="118" style="text-align:center;border-bottom:1px solid #666 "><?php echo $dong['soluong'] ?></td>
    <td width="109" style="text-align:center;border-bottom:1px solid #666 "><?php echo $dong['size'] ?></td>
    <th width="140" style="text-align:center;border-bottom:1px solid #666 "><?php echo $dong['gia'] ?> đ</th>
    <th width="150" style="text-align:center;border-bottom:1px solid #666 "><?php echo $dong['tongtien'] ?> đ</th>
    <td width="38" style="text-align:center;border-bottom:1px solid #666 ">
    	<a href="modul/user/xuly.php?msgh=<?php echo $dong['msgh'] ?>"> <input name="xoa" type="button" value="Xóa" style="background-color:#06C; color:#FFF; font-style:italic; font-size:13px; width:38px; height:23px"  /> </a>
    </td>
  </tr>
  <?php $tongtien = $tongtien+$dong['tongtien']; 
  
  } // end while ?>
  <tr>
    <th width="171" height="150" style="text-align:center"></th>
    <td width="118" style="text-align:center"></td>
    <td width="109" style="text-align:center"></td>
    <td width="140" style="text-align:center; padding-top:30px;font-size:18px; font-style:italic">Tổng tiền :</td>
    <td width="150" style="text-align:center"><?php echo $tongtien ?>.000 đ</td>
  </tr>
</table>
  
<table border="1" style="margin-left:22%;border-collapse:collapse; float:left" >
          <tr>
            <th width="314" height="49" colspan="7" style="color:#F33; font:'Times New Roman', Times, serif; text-align:left; font-size:16px; font-style:italic">Thông tin nhận hàng *</th>
          </tr>
          <tr>
            <td height="49"><input name="nguoinhan" type="text" placeholder="Họ và tên người nhận *" style="padding:7px; font-size:14px;width:300px"/></td>
          </tr>
          <tr>
            <td height="49"><input name="sdt" type="number" placeholder="Số điện thoại người nhận *" style="padding:7px; font-size:14px;width:300px"/></td>
          </tr>
          <tr>
            <td height="49"><input name="diachi" type="text" placeholder="Địa chỉ *" style="padding:7px; font-size:14px;width:300px"/></td>
          </tr>
          <tr>
            <td height="49"><select name="thanhpho" style="padding:7px; font-size:14px;width:318px">
                    <option>-- Chọn quận huyện --</option>
                    <option>Hà Đông</option>
                    <option>Ba Đình</option>
                    <option>Thanh Xuân</option>
                    <option>Từ Liêm</option>
                </select>
             </td>
          </tr>
</table>

<table border="1" style=" margin-left:10%;border-collapse:collapse; float:left" >
          <tr>
            <th width="314" height="49" colspan="7" style="font:'Times New Roman', Times, serif; text-align:left; font-size:24px">VẬN CHUYỂN</th>
          </tr>
          	<th width="314" height="49" colspan="7" style="font:'Times New Roman', Times, serif; text-align:left; font-style:italic; font-size:16px">* Giao hàng tận nơi phí 20-40k ( Shop sẽ gọi báo lại giá cho bạn )</th>
          <tr>
            <th width="314" height="49" colspan="7" style="font:'Times New Roman', Times, serif; text-align:left; font-size:24px; padding-top:30px">THANH TOÁN</th>
          </tr>
          <tr>
            <td height="49">
              <p>
                  <span style="font-size:20px; font-style:italic">* Thanh toán khi giao hàng</span>
                  <br />
                  <span style="font-size:12px; font-style:italic; color:#CCC">Khách hàng sẽ phải trả phí ship khi nhận hàng.</span>
                <br />
              </p>
            </td>
          </tr>
     <tr>
       <td height="183" style="text-align:center;padding-top:80px">
       <input name="thanhtoan" type="submit" value="Thanh toán" style="padding:7px;font-style:italic;color:#FFF; background-color:#000; font-size:18px;width:230px" ></td>
     </tr>
</table>
</form>