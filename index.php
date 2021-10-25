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

    <div>
        <?php
        include 'navbar.php';
        ?>
    </div>


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
                        include 'sidebar.php';
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
            include 'card.php';
        ?>
    </div>

            </div>
    </div>


   

    <div>
        <?php
            include 'footer.php';
        ?>
    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
</body>

</html>