<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Not Found | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main class="mx-12 lg:mx-52 mb-4" style="min-height: calc(100vh - 10rem)">

<div class="font-display text-3xl pt-36 text-center">
    404 Not Found
</div>

</main>
<?php include 'footer.php'; ?>
