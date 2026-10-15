<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../includes/header.php'; ?>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include __DIR__ . '/../includes/sidebar.php'; ?>
        <main class="col-md-9 col-lg-10 mt-5 ">
            <?php
            if(isset($content)){
                echo $content;
            }
            ?>
        </main>
    </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>