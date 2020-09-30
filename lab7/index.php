<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <form action="index.php" method="post">
            <div class="form-row">
                <div class="col-md-2">
                    <label>น้ำหนัก (kg.)</label>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="น้ำหนัก" value="54">
                </div>
                <div class="col-md-2">
                    <label>ส่วนสูง (cm.)</label>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="height" name="height" placeholder="ส่วนสูง" value="165">
                </div>
                <div class="col-md-2">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary mb-2">calculate</button>
                </div>
            </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $wei = $_POST['weight'];
            $hei = $_POST['height'];
            $hei_cal = $hei / 100;
            $bmi = $wei / ($hei_cal * $hei_cal);
            echo "<div class='text-center bg-secondary text-white px-3 py-4'>";
            echo "<h2>BMI is " . number_format($bmi, 2) . "</h2></div>";
        }
        ?>
        
    </div>
    
    
</body>
</html>