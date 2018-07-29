<?php wrapper_top('Admin\'s panel');
require 'includes/db.php'; ?>

<?php
$admin_q = mysqli_query($mysqli, "SELECT `username`, `password` FROM `wio_admin`");

$admin = mysqli_fetch_assoc($admin_q);

if ($_POST['username'] === $admin['username'] && md5($_POST['password']) === $admin['password']) {
    echo "Success!";
} else {
    echo "Incorrect login or password!<br />";
    echo "<a href=\"admin\">Return!</a>";
}
?>

<?php wrapper_bottom(); ?>
