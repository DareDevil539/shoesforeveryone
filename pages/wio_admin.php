<?php wrapper_top('Admin\'s panel'); ?>

<?php
if ($_POST['username'] === '' && $_POST['password'] === '') {
    echo "Incorrect login and password!<br />";
    echo "<a href=\"admin\">Return!</a>";
} else {
    var_dump($_POST);
}
?>

<?php wrapper_bottom(); ?>
