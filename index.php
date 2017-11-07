<?php
    include("./php/config.php");

    if (!$db){
        die("Connection Failed: " . mysqli_connect_error());
    }

    $result = mysqli_query($db,"SELECT count(*) FROM projects");
    $row = mysqli_fetch_row($result);
    $num = $row[0];

    //echo $num;
    //after getting the number of entires, get a random project

    $ran_project = rand(0,$num-1);
    //echo $ran_project;

    // $sql = "SELECT name,picture,body FROM projects";
    // $result = mysqli_query($sql);
    // $row = mysqli_fetch_row($result);
    $result = mysqli_query($db,"SELECT name,picture,body FROM projects WHERE id=$ran_project");
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name = $row['name'];
    $picture = $row['picture'];
    $body = $row['body'];

    //echo "$name.....$picture.....$body";


    mysqli_close($con);

?>
<!-- We do not own any of the images used in this website, all right go to the author of the images
http://www.larsoncarpenter.com/ - Background
http://www.pcgamer.com/hardware/ - PC Project
http://addrope.com/uncategorized/useful-websites-part-2.html - Website Building
-->
<html>
    <head>

        <!-- <meta charset="utf-8"> -->
        <link rel="stylesheet" href="./css/main.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="./js/jquery.js"></script>
        <script src="./js/main.js"></script>

        <title>CHS DIY</title>

    </head>

    <body>
        <div id="section-intro">

            <div id="background"></div>

            <div id="header">

                <ul>

                <li><div id="discover" onclick="scrollToDiv(this); return false;">Discover</div></li>

                <li><div id="upload" onclick="scrollToDiv(this); return false;">Upload</div></li>

                <li><div id="about" onclick="scrollToDiv(this); return false;">About</div></li>

                </ul>

            </div>

            <div id="content">

                <h1 id="product-name">Cen10 DIY</h1>

                <h3 id="product-desc">Make your projects a Cen10/10</h3>

            </div>

        </div>



        <div id="section-discover">

            <div id="section-discover-content">

                <h1 class="section-heading">Discover</h1>

                <h1 id="random-title">
                    <?=$name?>
                </h1>

                <img id="random-picture" src="<?=$picture?>" alt="php-picture">

                <div id="random-p-contain">

                </div>

                <h2 id="read-more"><a href="http://bpa.westada.xyz/project.php?id=<?=$ran_project?>" target="_blank">Continue Reading or Refresh For Another Project!</a></h2>

            </div>

        </div>

        <div id="section-upload">

            <div id="section-upload-content">

                <h1 class="section-heading">Upload</h1>

                <a href="http://bpa.westada.xyz/create.php"><div id="upload_your_own" class="upload-sub">

                    <h1>Upload Your Own Project</h1>

                </div></a>

                <a href="http://bpa.westada.xyz/explore.php"><div id="find_others" class="upload-sub">

                    <h1>Explore Other Projects</h1>

                </div></a>

            </div>

        </div>

        <div id="section-about">

            <div id="section-about-content">

                <h1 class="section-heading">About</h1>

                <h2 class="section-subheading">Our Team</h2>

                <div id="about-left">

                    <h3>Centennial High School BPA Website Design Team</h3>

                </div>

                <div id="about-right">

                    <h4 class="about-names">Ben Perez<br>Donovan Wright<br>Sriram Gopalakrishnan<br>Thea Sukianto</h3>

                </div>

            </div>

        </div>

        <footer>

            <div id="section-footer-content">

                <p id="footer-info">© 2016 Cen10 DIY | <a href="#">Return to the top</a></p>

            </div>

        </footer>


        <script>

            random_project = <?php echo json_encode($body); ?>;
            console.log(random_project)
            $("#random-p-contain").append('<p id="random-p">'+random_project+'</p>');

        </script>

    </body>
</html>
