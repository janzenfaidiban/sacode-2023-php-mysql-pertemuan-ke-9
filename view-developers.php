<?php
    require_once('koneksi.php');

    $sql = "SELECT * FROM developers";
    $result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">


                    <!-- table start -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Janzen</td>
                                <td>Faidiban</td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- table end -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>