<html>
    <head>

        <!-- <meta charset="utf-8"> -->
        <link rel="stylesheet" href="./css/main.css">

        <script src="./js/jquery.js"></script>
        <script src="./js/main.js"></script>

        <title>Create</title>

    </head>

    <body>
        <div id="section-intro-project">

            <div id="background"></div>

            <div id="header" style="padding-top: 0.5px;">

                <p id="header-project"><a id="project-return" href="http://bpa.westada.xyz/">Back To The Main Page</a></p>

            </div>

        </div>



        <div id="section-discover-upload">

            <div id="section-discover-content">

                <h1 id="explore-header">Upload Your Own Project</h1>

                <form id="create_own" action="./upload.php" method="post">
                    
                    Username
                    <br>
                    <input type="text" name="username">
                    <br>
                    Title
                    <br>
                    <input type="text" name="title">
                    <br>
                    Picture Link
                    <br>
                    <input type="text" name="picture">
                    <br>
                    Description
                    <br>
                    <textarea cols="50" rows="4" name="desc"></textarea>
                    <br>
                    <input type="submit" name="Submit Project">


                </form>

            </div>

        </div>

        <div id="footer">

            <div id="section-footer-content">

                <p id="footer-info">© 2016 Cen10 DIY | <a href="http://bpa.westada.xyz/">Return to the main page</a></p>

            </div>

        </div>

    </body>
</html>
