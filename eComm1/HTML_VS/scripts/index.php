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
    <nav class="navbar">
        <div class="container_fluid">

            <!-- ***** Logo ***** -->
            <a class="nav_logo" href="#">
            <img src="/assets/img/logo.png" alt="Logo" class="logo">  Phi</a>

            <!-- ***** Nav Buttons ***** -->
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Footwear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="basket.php">
                        <img src="/assests/img/basket.svg" alt="Basket" class="basket">
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