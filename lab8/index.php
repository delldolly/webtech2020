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
    <div class="container-fluid">
        <div class="text-center font-weight-bold mt-4 mb-4">
            <h5 style="color: #e08cff;">BMX49 252rd single</h5>
            <h1>HAANG KRENANG GENERAL ELECTION</h1>
            <h5 style="color: #80e2b9;">Final Result</h5>
        </div>
        <?php
        $json_data = file_get_contents('result.json');
        $data = json_decode($json_data, true);
        $count = count($data);
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
        <div class="row justify-content-center align-items-center mt-5">
            <?php
            if(isset($_POST['submit'])) {
                if(!empty($_POST['number'])) {
                    $num = $_POST['number'] - 1;
                    echo "<div class='col-12 col-md-4'>";
                    echo "<div class='card rounded'><img class='card-img-top' src='" . $data[$num]["img"] . "'>";
                    echo "<div class='card-body'><p class='card-title'>" . $data[$num]["name"] . "</p>";
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