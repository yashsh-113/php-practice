<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include 'components/navbar.php';
    ?>


    <div>
        <?php
        include 'carousel.php';
        ?>
    </div>

    <div class="container">
        <div class="row mt-2">
            <div class="col-3">
                <div class="d-none d-md-block">
                    <?php
                        include 'components/sidebar.php';
                    ?>
                </div>
            </div>
            <div class="col-md-9 col-12 p-txt">
                <h1>Lorem, ipsum.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nihil repellat maiores alias earum vel id saepe repudiandae, recusandae ipsa ab nam sapiente assumenda consequuntur excepturi soluta! Officiis, totam consectetur.</p>
                <h2>Lorem, ipsum dolor.</h2>
                <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero officiis fugiat rem fugit autem nulla, mollitia, aspernatur deserunt quaerat, sed placeat consequatur sequi ea eum! Accusamus temporibus incidunt corrupti ducimus, quae, doloremque corporis illum alias commodi laudantium, eveniet quibusdam molestias!
                </p> 
                
                <div>
                <?php
                    include 'components/card.php';
                ?>
            </div>

        </div>
    </div>

        <?php
            include 'components/footer.php';
        ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap.min.js"
        
    
    
</body>

</html>