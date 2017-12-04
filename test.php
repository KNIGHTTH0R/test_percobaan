<?php
function pernikahan(){
    echo 'Kategori Pernikahan: ';
    require "connection.php";
          $sql_query = "SELECT * FROM `artikel` WHERE `kategori`='pernikahan'";
          $resultset = mysqli_query($dbConn, $sql_query) or die("database error:". mysqli_error($dbConn));
          $jumlah_row = mysqli_num_rows($resultset);

          //echo $jumlah_row;
          echo '<ul class="fix-col fix-col-3">';
          while($rows = mysqli_fetch_array($resultset)) {
                echo '<li><img src="'; echo $rows['image']; echo '" width="250px"><p>'; echo $rows['content']; echo '</li>';          

          }
          echo '</ul>';
    }
function edukasi(){
    echo 'Kategori Edukasi: ';
    require "connection.php";
          $sql_query = "SELECT * FROM `artikel` WHERE `kategori`='edukasi'";
          $resultset = mysqli_query($dbConn, $sql_query) or die("database error:". mysqli_error($dbConn));
          $jumlah_row = mysqli_num_rows($resultset);

          //echo $jumlah_row;
          echo '<ul class="fix-col fix-col-3">';
          while($rows = mysqli_fetch_array($resultset)) {
                echo '<li><img src="'; echo $rows['image']; echo '" width="250px"><p>'; echo $rows['content']; echo '</li>';          

          }
          echo '</ul>';
    }
function pertunangan(){
    echo 'Kategori Pertunangan: ';
    require "connection.php";
          $sql_query = "SELECT * FROM `artikel` WHERE `kategori`='tunangan'";
          $resultset = mysqli_query($dbConn, $sql_query) or die("database error:". mysqli_error($dbConn));
          $jumlah_row = mysqli_num_rows($resultset);

          //echo $jumlah_row;
          echo '<ul class="fix-col fix-col-3">';
          while($rows = mysqli_fetch_array($resultset)) {
                echo '<li><img src="'; echo $rows['image']; echo '" width="250px"><p>'; echo $rows['content']; echo '</li>';          

          }
          echo '</ul>';
}

?>
    <style>
        body {
            background-color: darkkhaki;
        }

        .container {
            width: 100%;
        }

        .row {
            float: none;
            background-color: gold;
            width: 100%;
        }

        .row-right {
            float: right;
            background-color: aqua;
            width: 75%;
            height: 50px;
        }

        .row-left {
            float: left;
            background-color: aqua;
            width: 25%;
            height: 100px;
        }

        .button {
            margin-top: 4px;
            border: none;
            color: #000;
            width: 100px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .button-social {
            border: none;
            color: rgb (255, 255, 255, 0);
            width: 50px;
            height: 50px;
        }

        .button-social:hover {
            border: none;
            background-color: rgb (255, 255, 255, 0);
            color: fuchsia;
        }

        /*.fb:hover {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/B%26W_Facebook_icon.png/1024px-B%26W_Facebook_icon.png');

        }

        .tw:hover {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/B%26W_Twitter_icon.png/768px-B%26W_Twitter_icon.png');
        }*/

        .button:hover {
            border: none;
            color: #fff;
            background-color: #000;
        }

        .navigation {
            list-style: none;
            margin: 0;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row wrap;
            justify-content: flex-end;
        }

        .social {
            list-style: none;
            padding-right: 20px;
        }

        li {
            list-style: none;
            padding-right: 50px;
        }

        img {
            padding-top: 30px;
        }

    </style>

    <body>
        <div class="container">
            <div class="row-left">
                <center><img src="https://www.google.co.id/logos/doodles/2017/celebrating-50-years-of-kids-coding-5745168905928704.4-s.png"></center>
            </div>
            <div class="row-right">
                <form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
                    <ul class="navigation">
                        <li class="social"><input type="button" class="button-social" name="fb" value="Facebook" onclick="location.href='https://www.facebook.com/sharer/sharer.php?u=http%3A//greatestlovejewelleryfair.com'"></li>
                        <li class="social"><input type="button" class="button-social" name="tw" value="Twitter" onclick="location.href='https://twitter.com/home?status=http%3A//greatestlovejewelleryfair.com%0AIngin%20mencari%20Perhiasan%20yang%20sesuai%20dengan%20kepribadianmu%20?'"></li>
                        <li class="social"><input type="button" class="button-social" name="emailme" value="Web Master" onclick="location.href='mailto:sugihlia@gmail.com?&subject=Check This Out !&body=Hello%20check%20this%20link%20http%3A//greatestlovejewelleryfair.com/'"></li>
                    </ul>
                </form>
            </div>
            <div class="row-right">
                <form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
                    <ul class="navigation">
                        <li><input type="submit" class="button" name="Edukasi" value="Edukasi" /></li>
                        <li><input type="submit" class="button" name="Pernikahan" value="Pernikahan" /></li>
                        <li><input type="submit" class="button" name="Pertunangan" value="Pertunangan" /></li>
                        <!--<li><input type="submit" class="button" name="Home" value="Home" /></li>
                        <li><input type="submit" class="button" name="Gallery" value="Gallery" /></li>-->
                    </ul>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                    //$x = '$artikel'; 
                    //echo substr ($x, 0, 100); // outputs 100 karakter pertama

                    if($_POST){
                        if(isset($_POST['Edukasi'])){
                            edukasi();
                        }elseif(isset($_POST['Pernikahan'])){
                            pernikahan();
                        }elseif(isset($_POST['Pertunangan'])){
                            pertunangan();
                        }
                    }

?>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.button').click(function() {
                    var clickBtnValue = $(this).val();
                    var ajaxurl = 'ajax.php',
                        data = {
                            'action': clickBtnValue
                        };
                    $.post(ajaxurl, data, function(response) {
                        // Response div goes here.
                        alert("action performed successfully");
                    });
                });

            });

        </script>

        <?php
          /*require "connection.php";
          $sql_query = "SELECT * FROM `artikel` WHERE `kategori`='edukasi'";
          $resultset = mysqli_query($dbConn, $sql_query) or die("database error:". mysqli_error($dbConn));
          $jumlah_row = mysqli_num_rows($resultset);

          //echo $jumlah_row;
          echo '<ul class="fix-col fix-col-3">';
          while($rows = mysqli_fetch_array($resultset)) {
                echo '<li><img src="'; echo $rows['image']; echo '" width="250px"><p>'; echo $rows['content']; echo '</li>';          

          }
          echo '</ul>';*/
        ?>
    </body>
