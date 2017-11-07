<?php
    include("./php/config.php");

    if (!$db){
        die("Connection Failed: " . mysqli_connect_error());
    }

    $names = array();
    $pictures = array();
    $ids = array();
    $count = 0;
    $result = mysqli_query($db,"SELECT name,picture,id FROM projects ORDER BY name");
    while($row = $result->fetch_assoc()) { 
        $names[$count] = $row['name']; //
        $pictures[$count] = $row['picture']; //picture this
        $ids[$count] = $row['id']; //id have a better idea
        $count++; //me in
    }

    //echo json_encode($pictures);


    mysqli_close($con);

?>
<html>
    <head>

        <!-- <meta charset="utf-8"> -->
        <link rel="stylesheet" href="./css/main.css">

        <script src="./js/jquery.js"></script>
        <script src="./js/main.js"></script>

        <title>Explore</title>

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

                <h1 id="explore-header">Explore Other Projects</h1>

            </div>

        </div>

        <div id="footer">

            <div id="section-footer-content">

                <p id="footer-info">© 2016 Cen10 DIY | <a href="http://bpa.westada.xyz/">Return to the main page</a></p>

            </div>

        </div>

        <script>
            
            names = <?php echo json_encode($names);?>;
            pictures = <?php echo json_encode($pictures);?>;
            ids = <?php echo json_encode($ids);?>;

            function addEntry(name,picture,id){
                $("#section-discover-content").append('<div class="entry" value="'+id+'" onclick="openProject(this)"><p>'+name+'</p><img src="'+picture+'"></div>');
            }

            function openProject(data){
                window.open("http://bpa.westada.xyz/project.php?id="+data.getAttribute('value'), '_blank');
            }

            for (var i = 0; i < names.length; i++) {
                addEntry(names[i],pictures[i],ids[i]);
            }


        </script>

    </body>
</html>
