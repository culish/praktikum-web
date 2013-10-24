<?php
defined('_VALID') or die ('not allowed');

session_start();
function init_login(){

    $user = 'sulis';
    $pass = 'sulis';  

    if (isset($_POST['user']) && isset ($_POST['pass'])){
        $n = trim($_POST['user']);
        $p = trim($_POST['pass']);

        if(($n===$user) && ($p ===$pass)){          

            if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){
                $_SESSION['nlogin'] = $n;
                $_SESSION['time'] = time();
            } 
            ?>
            <script type="text/javascript">
            document.location.href="./";
            </script>
            <?php
            } 
            else {
                echo "Nama/Password Yang Anda Masukkan Salah";
                return false;
            }
        }
    }

function validate(){
    if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>
            <style type="text/css">
</style>        
    <div class="inner">
    <form action="" method="post">
    <table border=0 cellpadding=14>
    <tr>
                <div> Form Login </div></td>
      </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="user" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" /></td>
        </tr>
        <tr>
            <td></td>
                        <tr>
                        <td>
            <td><input type="submit" value="LOGIN" /></td>
                        </tr>
                        </td>
        </tr>        
    </table>
    </form>
    </div>

    <?php
    exit;
    }
    if(isset($_GET['m']) && $_GET['m'] == 'logout'){
    
    if(isset($_SESSION['nlogin'])){
        unset($_SESSION['nlogin']);
        }
    if(isset($_SESSION['time'])){
        unset($_SESSION['time']);
        }
    ?>
    <script type="text/javascript">
    document.location.href="./";
    </script>
    <?php
    }
}
?>