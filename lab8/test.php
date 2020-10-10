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
            /* background: rgb(243,180,247);
            background: linear-gradient(0deg, rgba(243,180,247,1) 0%, rgba(251,221,255,1) 32%, rgba(196,244,255,1) 100%); */
        }
    </style>
    <title>GE 252rd Single</title>
</head>
<body>
    <div class="container-fluid">
        <div class="text-center font-weight-bold mt-4 mb-4">
            <h5 style="color: #e08cff;">BMX49 252rd single</h5>
            <h1>HAANG KRENANG GENERAL ELECTION</h1>
            <h5 style="color: #10e7a0;">Final Result</h5>
        </div>
        <?php
        $url = "http://10.0.15.12/lab8/restapis/candidates";     
        $response = file_get_contents($url); 
        $result = json_decode($response);
        $count = count($result);
        ?>
        <form class="mt-3" action="" method="post">
            <div class="form-row justify-content-center">
                <div class="col-4">
                    <select class="custom-select" name="number">
                        <option selected disabled>Select Number</option>
                        <?php 
                        for ($i = 1; $i <= $count; $i++) {
                            echo "<option value='" . $i . "'>" . $i . "</option>";;
                        } 
                        ?>
                    </select>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </form>
        <div class="row justify-content-center align-items-center mt-4">
            <?php
            if(isset($_POST['submit'])) {
                if(!empty($_POST['number'])) {
                    $num = $_POST['number'] - 1;
                    echo "<div class='col-12 col-md-4'>";
                    echo "<div class='card rounded'><img class='card-img-top' src='" . $data[$num]["img"] . "'>";
                    echo "<div class='card-body'><h4 class='card-title'>" . $data[$num]["name"] . "</h4>";
                    echo "<h6 class='card-subtitle mb-2 text-danger'>อันดับ " . $data[$num]["no"] . "</h6>";
                    echo "<p class='card-text'>" . $data[$num]["score"] . " คะแนน</p></div></div></div>";
                } else {
                    echo 'Please select the value.';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>