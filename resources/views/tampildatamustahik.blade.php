<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mustahik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Data Mustahik</h1>

    <div class="container">
        <div class="row">
            <div class="card">
              <div class="card-body">
                <form action="/editdatamustahik/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name = "fullname" class="form-control" id="fullname" aria-describedby="name" value="{{ $data->fullname }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kategori Mustahik</label>
                    <input type="text" name = "mustahik_kategori_id" class="form-control" id="fullname" aria-describedby="name" value="{{ $data->mustahik_kategori_id }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name = "address" class="form-control" id="address" aria-describedby="address" value="{{ $data->address }}">
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