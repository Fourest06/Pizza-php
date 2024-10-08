<?php

    // session_start();
    
    // if($_SERVER["QUERY_STRING"] == "noname") {
    //     unset($_SESSION["name"]);
    // }

    // $name = $_SESSION["name"] ?? "Guest";
    // $gender = $_COOKIE["gender"] ?? "Unknown";

?>

<head>
    <title>
        Ninja Pizza
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .brand {
            background: #cbb09c !important;
        }

        .brand-text {
            color: #cbb09c !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }

        .add-text {
            display: inline-block;
        }

        .add-icon {
            display: none;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
        }

        @media (max-width: 600px) {
            .add-text {
                display: none;
            }

            .add-icon {
                display: flex;
            }
        }

        @media (min-width: 601px) {
            .add-text {
                display: inline-block;
            }

            .add-icon {
                display: none;
            }
        }
    </style>
</head>
<body class="grey lighten-4">
    
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">
                Ninja Pizza
            </a>
            <ul id="nav-mobile" class="right hide-on-smalll-and-down">
                <!-- <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
                <li class="grey-text">(<?php echo htmlspecialchars($gender); ?>)</li> -->
                <li><a href="add.php" class="btn brand z-depth-0">
                    <span class="add-text">
                        Add a Pizza
                    </span>
                    <span class="add-icon"><i class="material-icons">
                        +
                    </i></span>
                </a></li>
            </ul>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>