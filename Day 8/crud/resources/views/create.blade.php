<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row p-5">
        <div class="col-10">
          <h1>Create Personel</h1>
        </div>
        <div class="col-2">
            <a href="\" class="btn btn-success">Cancel</a>
        </div>
        <div class="col-12 mt-5">
          <form action="/create/save" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="middle_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Contact</label>
                <input type="number" class="form-control" name="contact" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Birthday</label>
                <input type="date" class="form-control" name="birthday" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select class="form-control" name="gender" required>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>