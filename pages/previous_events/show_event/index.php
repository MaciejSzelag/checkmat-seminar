<?php $folderPath = "../../../";
$tabTitle = "Seminars | Checkmat ";include $folderPath . "includes/head.php";?>
<?php include $folderPath . "includes/intro.php";?>
  <!-- navigation  -->
  <?php $link_path = $folderPath;include $link_path . "includes/navigation.php";?>
    <!-- navigation  -->

    <!-- main content -->
    <article>

        <div class="article-top">
            <div class="section-wrap">
                <div class="section-column">
                    <div class="title">
                        <h1>Espen Mathiesen</h1>
                        <p>10 February 2024</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="article-middle">
            <div class="article-img-wrap">
                <img src="<?php echo $folderPath; ?>images/Gallery/Espen-Mathiesen.webp" alt="Espen-Mathiesen">
            </div>

        </div>
        <div class=" article-content">
            <div class="event-description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempore dolorem dolorum
                    cupiditate
                    eum eveniet, quam labore quasi aliquid aut voluptates sunt asperiores aliquam. Reiciendis,
                    ratione
                    eos? Sapiente, ipsam sit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, eligendi mollitia deleniti porro
                    repudiandae ipsum, eos itaque ab debitis alias dolore hic quo cumque incidunt, odit doloremque
                    animi
                    reprehenderit tempora.</p>

            </div>
            <div class="gallery-wrap">

            <?php include "includes/gallery_images.php";?>
            </div>

        </div>
    </article>
    <!-- contact  -->
    <?php include $folderPath . "includes/contact.php";?>
    <!-- contact  -->
    <!-- main content -->
    <!-- footer  -->
    <?php include $folderPath . "includes/footer.php";?>
    <!-- footer  -->
