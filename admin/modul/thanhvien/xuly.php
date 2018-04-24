			<?php
                    $conn = mysqli_connect("localhost","root","","btl");
					$id = $_GET['id'];
					$sql = "DELETE FROM thanhvien WHERE id = '$id'";
					mysqli_query($conn,$sql);
					header("location: ../../admin.php?ac=thanhvien");	
            ?>