<?php

include 'database.php';

$titleConn = $vtConnect->prepare("SELECT * FROM siteInfo WHERE siteKey = :siteValue");
$titleConn->execute(array(':siteValue'=> 'title'));
$title = $titleConn->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--- Deneme olarak Başlık Geliyor -->
	<title> <?php echo $title['siteValue']  ?>	</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.css">

    <script src="https://kit.fontawesome.com/3eb9fff117.js" crossorigin="anonymous"></script>
    <!--
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    --->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>


<!----
.col (screen width equal to or less than 576px)
.col-sm (small-device -> screen width equal to or greater than 576px)
.col-md (medium-device -> screen width equal to or greater than 768px)
.col-lg (large-device -> screen width equal to or greater than 992px)
.col-xl (extra large-device -> screen width equal to or greater than 1200px)

--->

    <div class="wrapper">

        <div id="header">
            <div class="headerBox">
                <div class="hederBox1">

                </div>
                <div class="hederBox2">
                    <a href="#"><i class="fas fa-user"></i> Giriş </a>
                    <span>info@info.com</span>
                    <span> +000 123 456 7890</span>

                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </div>
                <div class="hederBox3">
                    <a href="#"><i class="fas fa-search"></i></a>
                        <a href="#"><i class="fas fa-comments"></i></a>
                    <ul>
                        <li><a href="#"> KOLEKSİYONLAR</a></li>
                        <li><a href="#"> KAMPANYALAR</a></li>
                        <li><a href="#"> DÖKÜMANLAR</a></li>
                        <li><a href="#"> YETKİLİ SERVİS NOKTALARI</a></li>
                        <li><a href="#"> DNA</a></li>

                    </ul>

                </div>

            </div>
            <div class="mobil">
                <i class="fas fa-bars"></i>
                <a href="#"><i class="fas fa-shopping-bag"></i></a>
                <a href="#"><i class="fas fa-search"></i></a>

            </div>
        </div>

        <div id="content">
            <div class="intro">
<!--- Json ile random bulduğum siteden resim verileri geliyor.  -->
                <div class="introBox1">
                    <?php
                    $json_url = "http://api.androidhive.info/json/movies.json"; //adresi
                    $json_file = file_get_contents($json_url);
                    $movies = json_decode($json_file,true);
                    $photo =  $movies[2]['image'];
                    echo "<img src=\"$photo\"> ";

                    ?>

                </div>
                <div class="introBox2">
                    <!--- Json ile random bulduğum siteden resim verileri geliyor.  -->

                    <?php
                    $json_url = "http://api.androidhive.info/json/movies.json"; //adresi
                    $json_file = file_get_contents($json_url);
                    $movies = json_decode($json_file,true);
                    $photo =  $movies[3]['image'];
                    echo "<img src=\"$photo\"> ";

                    ?>

                </div>
                <div class="introBox3">
                    <!--- Json ile random bulduğum siteden resim verileri geliyor.  -->

                    <?php
                    $json_url = "http://api.androidhive.info/json/movies.json"; //adresi
                    $json_file = file_get_contents($json_url);
                    $movies = json_decode($json_file,true);
                    $photo =  $movies[6]['image'];
                    echo "<img src=\"$photo\"> ";

                    ?>
                </div>


            </div>



            <div class="article">
                <!--- E-bülten için E-posta kaydı alınıyor,   -->

                <p> E-Posta Bülten Kayıt </p>
                <form class="formRegister" action="ajax.php" method="post" onsubmit="return false">
                    <label>E-Posta : </label>
                    <input type="text" id="email" name="email" /><br>

                    <button id="buton">Kayıt Ol</button>
                </form>
                <div id="sonuc">

                </div>
            </div>
        </div>

        <div id="footer">

        </div>


    </div>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/write.js"></script>


</body>
</html>

