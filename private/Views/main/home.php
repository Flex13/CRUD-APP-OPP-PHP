<?php
$this->view("includes/main/header", $data);
?>

<!-- Add New User Modal Start -->
<?php include(views_models('addUser'));?>
<!-- Add New User Modal End -->

<!-- Edit User Modal Start -->
<?php include(views_models('editUser'));?>
<!-- Edit User Modal End -->

<!-- Show Table -->
<?php include(views_models('viewTable')); ?>
<!-- Show Table -->


<?php
$this->view("includes/main/footer", $data);

?>