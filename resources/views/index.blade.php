<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container" style="margin-top: 50px;">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <div class="text-center text-danger">
                <div class="form-group">
                    <h3>Upload Image</h3>
                    <form action="/post" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name='file' class="form-control">
                        <button type="submit" class="btn btn-danger mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
