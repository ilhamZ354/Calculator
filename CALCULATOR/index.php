<?php
include('oop.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Pemrograman Web Lanjutan</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.grid.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col md-6">
            <div class="container-fluid">
                <div class="card mx-auto" >
                    <div class="content">
                        <div class="back">
                            <div class="back-content">
                                    <div class="col">
                                        <div class="card-header">
                                        <h2>calculator</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="input1">
                                            <form method="post" id="nilai" action="index.php">
                                                <input type="text" name="angka" id="angka" placeholder='0'>
                                            </form>
                                            </div>
                                            <div class="input2 mt-2">
                                                <form method="post" id="total">
                                                    <input type="number" name="" id="" readonly="true" value="<?php echo $hasil ?>">
                                                </form>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-4 text-center">
                                                    <button class="btn btn-success" id="tambah" name="tambah" onclick="myFunction('+')"><h1>+</h1></button>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <button class="btn btn-success" id="kurang" name="kurang" onclick="myFunction('-')"><h1>-</h1></button>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <button class="btn btn-success" id="kali" name="kali" onclick="myFunction('*')"><h1>x</h1></button>
                                                </div>    
                                            </div>
                                            <div class="row mt-2" id="bawah">
                                                <div class="col-4 text-center">
                                                    <button class="btn btn-success" id="bagi" name="bagi" onclick="myFunction('/')"><h1>/</h1></button>
                                                </div>
                                                
                                                <div class="col-4 text-center">
                                                    <button class="btn btn-danger" name="clear" onclick="reset()"><h1>C</h1></button>
                                                </div>

                                                <div class="col-4 text-center">
                                                    <button class="btn btn-info" name="hasil" onclick="submit()"><h1>=</h1></button>
                                                </div>
                                            </div>
                                      
                                            
                                        </div>

                                    </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>