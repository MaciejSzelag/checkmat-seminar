    <!-- footer  -->
    <footer>
        <div class="foot">
            <ul>
                <li><a href="https://www.facebook.com/BJJPlymouth">Facebook</a></li>
                <li><a href="https://www.instagram.com/bjjplymouth/">Instagram</a></li>
                <li><a href="https://www.bjjplymouth.co.uk">bjjplymouth.co.uk</a></li>
            </ul>
        </div>
        <div class="foot">
            <p>Copyright&copy; <?php if (date("Y") == 2024) {echo date("Y");} else {echo "2024 -" . date("Y");}
;?> bjjplymouth | Designed and developed: <a href="https://maciejszelag.co.uk">Maciej
                    Szelag</a></p>
        </div>
    </footer>
    <!-- footer  -->
    <script src="<?php $folderPath;if (!empty($folderPath)) {echo $folderPath . "assets/js/script.js";} else {echo "assets/js/script.js";}
;?>"></script>
</body>

</html>