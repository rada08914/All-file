<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body class="bg-dark">
  
    <div class="container">
        <div class="align-items-center"></div>
        <div class="row align-items-center">
            <div class="col"></div>    
                <div class="col-10 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h3>Teacher</h3>  
                            <br>
                            <form class="row g-2">
            
                                <div class="col-auto">
                                    <input type="search" class="form-control" id="search" placeholder="Search">
                                </div>
                                <div class="col-auto" style="position: absolute; right:20px;">
                                    <button class="btn btn-primary me-md-2" type="button">Create</button>
                                </div>
                              </form>

                        </div>
                        <form class="text-start">
                            <div class="card">
                                <div class="mb-3">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@fat</td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </form>
                </div>
            <div class="col"></div>
        </div>
    </div>
    

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>