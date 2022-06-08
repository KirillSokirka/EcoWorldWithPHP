<header class="header">
    <div class="logo">
        <a href="index.php"><img alt="Logo"></a>
    </div>
    <div class="menu">
        <?php
        session_start();
        if ($_SESSION["authenticated"]) {
            include('frontend/components/authorized-header.php');
        } else {
            include('frontend/components/notauthorized-header.php');
            include("frontend/components/auth-modals.php");
        } ?>
    </div>
    <div class="mobile-menu">
        <a href="frontend/components/mobile-menu.php">
            <img class="menu-button" alt="Menu">
        </a>
    </div>

    <script type="text/javascript" src="frontend/js/auth.js"></script>
</header>
