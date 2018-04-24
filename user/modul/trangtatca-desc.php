<div class="phantrang" >
	<?php 
            $sql="SELECT * FROM sanpham";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            $sotrang = ceil($num/8);
     ?>
    <div class="trang">
        <?php echo "&laquo;"; ?>
    </div>
    <?php for($i = 1;$i<=$sotrang;$i++) { ?>
        <a href="cuahang.php?ac&msloai=<?php echo $_GET['msloai']; ?>&mssp=<?php echo $_GET['mssp']; ?>&trang=<?php echo $i ?>&sx=desc" >
            <?php if($i == $_GET['trang']) { ?>
            <div class="trang" style="background-color:#39F">
                <?php echo $i; ?>
            </div>
            <?php } else{ ?>
            <div class="trang">
                <?php echo $i; ?>
            </div>
            <?php } ?>
        </a>
    <?php } ?>
    <div class="trang">
        <?php echo "&raquo;"; ?>
    </div>
</div>