<main class="main">
    <?php
    function PageBuilder($page){
        switch ($page) {
            case "home":
                include ('frontend/components/banner.php');
                include('frontend/components/filters.php');
                include('frontend/components/announcements-area.php');
                break;
            case "create":
                include("frontend/components/announcements-create.php");
                break;
            case "info":
                include("frontend/components/announcements-info.php");
                break;
        }
    }

    if($_GET['page']){
    $page = $_GET['page'];
    PageBuilder($page);
    } else {
        PageBuilder('home');
    }
    ?>
</main>

