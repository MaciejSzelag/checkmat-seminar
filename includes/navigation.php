    <!-- navigation  -->
    <nav class="header-fixed-frame">
        <div class="frame-top-header">
            <div class="logo-wrap ">
            <?php if (empty($folderPath)) {?>
                <div class="logo-cotainer"><a href="https://www.bjjplymouth.co.uk"><img
                            src="images/Checkmat-Plymouth-Logo.webp" alt="Checkmat logo"></a></div>
                <div class="logo-cotainer"><a href="https://www.bjjplymouth.co.uk"><img src="images/oceanbjj-logo.webp"
                            alt="OceanBjj Logo"></a>
                </div><?php } else {?>
                    <div class="logo-cotainer"><a href="https://www.bjjplymouth.co.uk"><img
                            src="<?php echo $folderPath; ?>images/Checkmat-Plymouth-Logo.webp" alt="Checkmat logo"></a></div>
                <div class="logo-cotainer"><a href="https://www.bjjplymouth.co.uk"><img src="<?php echo $folderPath; ?>images/oceanbjj-logo.webp"
                            alt="OceanBjj Logo"></a>
                </div>
                    <?php }?>
            </div>
            <div class="hamburger-menu">
                <div class="line-wrap ">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>

        </div>
        <div class="navigation-menu">
            <div class="navigation-menu-bg-cover-1"></div>
            <div class="navigation-menu-bg-cover-2">
                <ul class="menu-list">

                <?php $link_path;if (empty($link_path)) {?>
                    <li><a href="#Home" class="delayedLink">Home</a></li>
                    <li><a href="#Seminar-Details" class="delayedLink">Seminar Details</a></li>
                    <li><a href="pages/previous_events/" class="delayedLink">Previous Events</a></li>
                    <li><a href="#Contact" class="delayedLink">Contact</a></li>
                <?php } else {?>
                    <li><a href="<?php echo $link_path; ?>#Home" class="delayedLink">Home</a></li>
                    <li><a href="<?php echo $link_path; ?>#Seminar-Details" class="delayedLink">Seminar Details</a></li>
                    <li><a href="<?php echo $link_path; ?>pages/previous_events/" class="delayedLink">Previous Events</a></li>
                    <li><a href="<?php echo $link_path; ?>#Contact" class="delayedLink">Contact</a></li>

                    <?php }?>
                </ul>
            </div>

        </div>
    </nav>
    <div class="frame-left-header"></div>
    <div class="frame-right-header"></div>
    <!-- navigation  -->
