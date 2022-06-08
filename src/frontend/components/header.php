<header class="header">
    <div class="logo">
        <a href="index.php"><img alt="Logo"></a>
    </div>
    <div class="menu">
        <?php
            require ('backend/Database.php');
        $db = Database::getInstance();
        if (isset($db)) {
            include('frontend/components/notauthorized-header.php');
        } else {
            include('frontend/components/authorized-header.php');
        }
        ?>
    </div>
    
    <div class="mobile-menu">
        <a href="src/html/menu-page.html">
            <img class="menu-button" alt="Menu">
        </a>
    </div>
    <?php include ("frontend/components/auth-modals.php") ?>
</header>
