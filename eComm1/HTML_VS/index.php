<!--
><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><
><   FILE NAME:      index.php	                	                ><
><   AUTHOR:         Elysia Folkes                                  ><
><                                                                  ><
><      %%%%%%%%%%%%%%%%%%%%%%  SUMMARY  %%%%%%%%%%%%%%%%%%%%%      ><
><                   An ecommerce website homepage                  ><
><      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%      ><                                                           *
><                                                                  ><
><   DATE CREATED:   29 March 2026   	                            ><
><   LAST UPDATED:   09 May 2026      	                            ><
><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><  ><
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ***** Bootstrap CSS bundle ***** -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/index_styles.css" />
</head>

<body>

    <!-- ***** Navigation Bar: Logo and Buttons ***** -->
    <nav class="navbar sticky-top nav-tabs">
        <div class="container_fluid">

            <!-- ***** Logo ***** -->
            <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.png" alt="Logo" class="logo"></a>
        
        </div>
        <div class="container_fluid">
            
            <!-- ***** Nav Buttons ***** -->
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="footwear.php">Footwear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="accessories.php">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="basket.php">
                        <img src="assets/img/basket.svg" width="25em" height="25em" alt="Basket" class="basket">
                    </a>
                </li>
            </ul>
        
        </div>

    </nav>

    <!-- ***** Bootstrap JS bundle ***** -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>

</html>