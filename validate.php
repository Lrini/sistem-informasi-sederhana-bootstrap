<?php
      //  error_reporting(0);
        include("koneksi.php");

        if(isset($_POST['login'])){
            $username=$_POST['admin'];
            $pass=$_POST['Password'];

            $sql=mysql_query("SELECT * from admin where admin ='$username' and Password='$pass'");
            $row=mysql_num_rows($sql);
            $data=mysql_fetch_array($sql);

            if($username == "'or 1=1--"){
                echo "tidak bisa di injection lagi";
            }
            elseif($username == "'or1=1--"){
                echo "tidak bisa di injection lagi";

            }
            elseif($username== "' or 1=1 --"){
                    echo "tidak bisa di injection lagi";
            }

            elseif($username== "' or 1=1--"){
                    echo "tidak bisa di injection lagi";
            }
            elseif($username== "' or 1=1  --"){
                    echo "tidak bisa di injection lagi";
            }
            elseif($username== "' or 1=1   --"){
                    echo "tidak bisa di injection lagi";
            }else{

            
                if($row > 0){
                    session_start();
                    $_SESSION['nama_admin']=$data['nama_admin'];
                        echo'    <script>alert("berhasil");window.location="index.php"</script>';
                }
            else
            {
                ?>
                <div style="color: red;font-size: 30px">
                <center>
                <b>Username dan Password Salah  !!</b>
                </center>
                </div>
                <?php
            }
        }}

        ?>