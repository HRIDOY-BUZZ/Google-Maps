<?php 
    if(isset($_POST['submit']))
    {
        $long = $_POST['longitude'];
        $latt = $_POST['lattitude'];
    }
    else
    {
        $long = "23.78057325790923";
        $latt = "90.27923977010119";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .form-div{
            margin-top: 100px;
            width: 40%;
            margin-bottom: 35px;
        }
    </style>
</head>
<body>
    <div class="values">
        <center>
            <div class="form-div">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-5">
                            <input type="text" name="longitude" value="<?php if(isset($_POST['longitude'])) echo $_POST['longitude']; ?>" placeholder="longitude">
                        </div>
                        <div class="col-5">
                            <input type="text" name="lattitude" value="<?php if(isset($_POST['lattitude'])) echo $_POST['lattitude']; ?>" placeholder="lattitude">
                        </div>
                        <div class="col-2">
                            <input type="submit" name="submit" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </div>
    <div class="map">
        <center>
        <iframe 
            src="https://maps.google.com/maps?q=<?php echo $long; ?>, <?php echo $latt; ?>&z=17&output=embed"
            width="600" height="450" style="border:0;" loading="lazy">
        </iframe>
        </center>
        <?php
            echo $long." + ".$latt;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>