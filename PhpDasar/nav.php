<nav>
<ul>
    <li><a href="?menu=Home">Home</a></li>
    <li><a href="?menu=Contact">Contact</a></li>
    <li><a href="?menu=About us">About us</a></li>
</ul>
</nav>
<?php
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;
    }

?>