<?php $folderPath = "../";
$tabTitle = " Previous Seminars | Checkmat ";include $folderPath . "includes/head.php";?>
<?php include $folderPath . "includes/intro.php";?>
    <!-- navigation  -->
    <?php $link_path = $folderPath;include $link_path . "includes/navigation.php";?>
    <!-- navigation  -->
    <!-- blog header  -->
    <header class="blog-header">
        <div class="blog-header-wrap">
            <h1 class="blog-header-h1">Previous Events at Checkmat Plymouth</h1>
        </div>
    </header>
    <!-- header  -->
    <!-- main content -->
    <section class="blog-container">
        <div class="blog-wrappper">
        <?php include "includes/card.php";?>
        </div>
    </section>
    <!-- contact  -->
    <?php include $folderPath . "includes/contact.php";?>
    <!-- contact  -->
    <!-- main content -->
    <!-- footer  -->
    <?php include "../../includes/footer.php";?>
    <!-- footer  -->
