<?php
ob_start();
// include header.php file
 include ('header.php');
?>

<?php
/*  include banner area  */
 include ('Template/_banner-area.php');
/*  include banner area  */
?>

<?php
/*  include top sale section  */
 include ('Template/_top-sale.php');
/*  include top sale section  */
?>

<?php
/*  include special price section  */
 include ('Template/_special-price.php');
/*  include special price section  */
?>

<?php
/*  include Banner ads  */
 include ('Template/_banner-ads.php');
/*  include Banner ads   */
?>

<?php
/*  include new phone section  */
 include ('Template/_new-phones.php');
/*  include new phone section  */
?>

<?php
/*  include blog area  */
 include ('Template/_blogs.php');
/*  include blog area  */
?>

<?php
ob_start();
// include footer.php file
 include ('footer.php');
?>
