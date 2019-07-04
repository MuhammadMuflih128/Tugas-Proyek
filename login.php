<html>
<head></head>
<body>
    <form method="post"><!-- fungsi untuk mengirim nilai ke halaman lain-->
        <table>
            <!--untuk menginputkan nilai username-->
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <!--untuk menginputkan nilai password-->
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <!-- untuk mensubmit nilai yang sudah kita inputkan tadi-->
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="login" value="Login" /></td>
            </tr>
        </table>
        <?php
session_start();
//mengisi nilai dari variabel
$_SESSION["username"]="Muhammad Muflih";
$_SESSION["password"]="uad";
if (isset($_POST["login"])){
    //jika nilai yang di inputkan benar, maka akan menuju ke halaman menu
    if ($_POST["username"]=="Muhammad Muflih" && $_POST["password"]=="uad"){
        header("location:menu.html");
    }else{
        //jika nilai yang di inputkan salah, maka anda akan di minta untuk mengisi password kembali
        echo "Maaf Username Atau Password Salah !";
    }
}
?>
    </form>
</body>
</html>