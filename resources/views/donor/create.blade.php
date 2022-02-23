<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="card my-5">
            <div class="card-header">
                <a href="/" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form action="/donor" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" class="form-control" type="text" name="address">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Phone Number</label>
                        <input id="mobile" class="form-control" type="text" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label for="my-select">Text</label>
                        <select id="my-select" class="form-control" name="">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Date of appointment</label>
                        <input id="date" class="form-control" type="date" name="appointment">
                    </div>
                    <button type="submit" class="btn btn-success my-5">Submit Record</button>
                   </form>
            </div>
        </div>
    </div>
</body>
</html>