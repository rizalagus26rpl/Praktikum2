<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body {background-image: url("patternhead31b-thumb.png"); font-family:sans-serif;}
        div {
            background-color: white;
            width:300px;
            height:250px;
            margin-left: 525px;
            margin-top:180px;
            border-radius:25px;
            opacity : 0,8;

        }
        h1 {
            margin-left:10px;
            padding-top:10px;
        }
        h2 {
            margin-left:115px;
            margin-top:170px;
        }
    </style>
</head>
<body>
    <div>
    <?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
    echo "<h1>LOGIN BERHASIL</h1>";
    echo "<h2><a href='logout.php'>Logout</a></h2>";
    }else{
        echo header("location:form_login.php");
    }
    ?> 
    </div>
</body>
</html>