<div class="navbar navbar-expand-lg navbar-light bg-dark">
        <nav class="container">
            <a class="logo-txt"href="#">YASH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                $menu = array("home","about us","contact","company");
                    echo "<ul class=' navbar-nav ml-auto'>";
                    for($i=0; $i<1; $i++)
                    {
                    echo  "<li class='main-nav'><a href='google.com'> $menu[0]</a> </li>";
                    echo  "<li class='main-nav'><a href='about.php'> $menu[1]</a> </li>";
                    echo  "<li class='main-nav'><a href='flikart.com'> $menu[2]</a> </li>";
                    echo  "<li class='main-nav'><a href='amazon.com'> $menu[3]</a> </li>";
                    }
                echo "<ul>";
            ?>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
</div>