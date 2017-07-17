<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('Layout/meta'); ?>
    <title><?php echo $title; ?></title>
    <?php $this->load->view('Layout/css'); ?>
<!--    <link rel='shortcut icon' type='image/x-icon' href="--><?php //echo base_url('assets/dist/img/fevicon.ico'); ?><!--"/>-->
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!--fonts-->
        <script>$(document).ready(function () {
                $(".memenu").memenu();
            });</script>

</head>
<body>
<!--header-->
<?php $this->load->view('Layout/header'); ?>
<!--banner-->
<?php if(isset($banner)&& !empty($banner)){echo $banner; }?>

<!--content-->

<?php echo $content; ?>

<!--footer-->
<?php $this->load->view('Layout/footer'); ?>

<?php $this->load->view('Layout/script'); ?>
</body>
<script>
    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
</script>
</html>