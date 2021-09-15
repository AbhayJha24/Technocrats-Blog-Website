<?php 
    require('functions.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Technocrats Robotics | Blog</title>
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script>
            function greenGradient() {
                    document.getElementById("segmentHolder").style.background = "linear-gradient(rgba(0,0,0,0.2),rgba(79,255,56,0.3))";
                
            }

            function stopgreenGradient() {
                    document.getElementById("segmentHolder").style.background = "none";

            }
        </script>
    </head>
    <body>
        <div class="topHolder">
        <img src="tclogo.png" class="tclogo" />
        <h1 class="whiteHeading">Technocrats Robotics Blog</h1>
        <img src="double-down-arrow.png" class="downwardArrow" onclick="window.scrollTo(0,400);" />
        <br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br />
        <div id="segmentHolder"><hr /><p class="borderText">BLOG POSTS</p><hr /></div>
        </div>
        <div class="bottomHolder" onmouseover="greenGradient();" onmouseleave="stopgreenGradient();">
            <br /><br /><br /><br /><br />
            <?php 

            $r = $post->getRows()[0]['COUNT(*)'];

            for($i=0;$i<$r;$i++){
            echo
            '<div class="blogPostHolder">
            <h3 class="blogpostWriterName">'; print_r($post->getTableData()[$i]['name']); echo '</h3>
            <p class="blogpostText">';
                print_r($post->getTableData()[$i]['post']); echo
            '</p><br /><p class="blogpostDate">'; print_r($post->getTableData()[$i]['ts']); echo '</p>
            </div><br /><br /><br />';
            }
            ?>
        <br /><br /><br /><br /><br />
        </div>
    </body>
</html>