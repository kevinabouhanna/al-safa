<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles.css" rel="stylesheet">
    <link href="icons.css" rel="stylesheet">
    <title>Title Goes Here</title>
</head>
<body dir="rtl">
<?php include 'header.php'; ?>

<div class="md:py-16 py-8 text-center max-w-1400px container">
    <div class="md:text-h1 text-h4 font-bold">
        اسامينا 
    </div>
</div>

<div class="container py-10 max-w-1400px">
    <div class="grid md:grid-cols-4 grid-cols-1 gap-4">
        <?php
        for ($i = 1; $i < 17; $i++) {
            include 'components/author_card.php';
        }
        ?>
    </div>
</div>

<?php
include 'pre_footer.php';
include "footer.php";
include "footer_after.php"
?>

</body>
</html>