
<?php for ($i = 0; $i <= 10 - 1; $i++) { //loop only to display multiple content

    ?>

<div class="blog-card">
    <div class="b-img-wrap">
        <img src="<?php echo $folderPath; ?>images/Gallery/Espen-Mathiesen.webp" alt="Espen">
    </div>
    <div class="blog-content">
        <div class="blog-txt">
            <h1>Espen Mathiesen</h1>
            <p>10 February 2024</p>
        </div>
        <div class="btn">
            <a href="show_event/" class="delayedLink">See more</a>
        </div>
    </div>
</div>
<?php
}?>