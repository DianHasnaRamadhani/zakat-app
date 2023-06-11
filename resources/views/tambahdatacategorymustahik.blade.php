<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category Mustahik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Tambah Data Category Mustahik</h1>

    <div class="container">
        <div class="row">
            <div class="card">
              <div class="card-body">
                <form action="/insertdatacategorymustahik" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categoty Name</label>
                    <input type="text" name = "category_name" class="form-control" id="category_name" aria-describedby="name">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name = "description" class="description" id="description" aria-describedby="name">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>