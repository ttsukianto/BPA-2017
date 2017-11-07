<?php
    include("./php/config.php");

    if (!$db){
        die("Connection Failed: " . mysqli_connect_error());
    }


    $project = htmlspecialchars($_GET["id"]);

    $result = mysqli_query($db,"SELECT name,picture,body FROM projects WHERE id=$project");
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name = $row['name'];
    $picture = $row['picture'];
    $body = $row['body'];

    //echo "$name.....$picture.....$body";


    mysqli_close($con);

?>
<html>
    <head>

        <!-- <meta charset="utf-8"> -->
        <link rel="stylesheet" href="./css/main.css">

        <script src="./js/jquery.js"></script>
        <script src="./js/main.js"></script>

        <title>Project: <?=$name?></title>

    </head>

    <body>
        <div id="section-intro-project">

            <div id="background"></div>

            <div id="header" style="padding-top: 0.5px;">

                <p id="header-project"><a id="project-return" href="http://bpa.westada.xyz/">Back To The Main Page</a></p>

            </div>

        </div>



        <div id="section-discover-project">

            <div id="section-discover-content">

                <h1 id="random-title">
                    <?=$name?>
                </h1>

                <img id="random-picture-project" src="<?=$picture?>" alt="php-picture">

                <div id="random-p-contain">

                    <p id="random-p-project">
                        
                        <?=$body?>

                    </p>

                </div>

            </div>

        </div>

        <!-- <div id="section-faq">
            <div id="section-faq-content">
                <h1 class="section-heading">FAQ</h1>
            </div>
        </div>
        <div id="section-support">
            <div id="section-faq-content">
                <h1 class="section-heading">Support</h1>
            </div>
        </div> -->

        <div id="footer">

            <div id="section-footer-content">

                <p id="footer-info">© 2016 Cen10 DIY | <a href="http://bpa.westada.xyz/">Return to the main page</a></p>

            </div>

        </div>

    </body>
</html>
