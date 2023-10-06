<?php
    require_once('koneksi.php');

    $sql = "SELECT * FROM developers";
    $developers = $koneksi->query($sql);
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
<body class="bg-dark">

    <div class="container py-5">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card rounded-0">

                    <div class="card-header">
                        <h1>Data Developers at Nokensoft</h1>
                        <a href="" class="btn btn-primary rounded-0">
                            Add Developer
                        </a>
                    </div>
                    <!-- .card header end -->

                    <div class="card-body">
                        <!-- table start -->
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    $no = 1;
                                    if((mysqli_num_rows($developers) > 0))
                                    {
                                        while($developer = mysqli_fetch_assoc($developers))
                                        {
                                            echo "
                                                <tr>
                                                    <td>
                                                        " . $no++ . "
                                                    </td>
                                                    <td>
                                                        " . $developer['first_name'] . "
                                                    </td>
                                                    <td>
                                                        " . $developer['last_name'] . "
                                                    </td>
                                                    <td>
                                                        " . $developer['job_desc'] . "
                                                    </td>
                                                    <td>
                                                        " . $developer['created_at'] . "
                                                    </td>
                                                    <td>
                                                        " . $developer['updated_at'] . "
                                                    </td>
                                                    <td class='d-flex gap-1'>
                                                        <a href='#' class='btn btn-sm btn-primary rounded-0'>View</a>
                                                        <a href='#' class='btn btn-sm btn-outline-primary rounded-0'>Edit</a>
                                                        <a href='#' class='btn btn-sm btn-outline-danger rounded-0'>Delete</a>
                                                    </td>
                                                </tr>
                                            ";
                                        }
                                    } else {
                                        echo "no data!";
                                    }
                                ?>

                            </tbody>
                        </table>
                        <!-- table end -->
                    </div>
                    <!-- .card body end -->
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>