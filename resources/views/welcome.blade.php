<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih Penyakit Rabun</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header">
                        Pilih Diagnosa Awal
                    </div>
                    <div class="card-body">
                        <form action="{{ route('check.kondisi') }}" method="post" id="pilih-kondisi">
                            @csrf
                            <div class="form-group" id="kondisi">
                                <label for="kondisi">Kira-kira kondisi manakah yang Anda alami?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kondisi" id="kondisi1" value="kecanduan" required>
                                    <label class="form-check-label" for="kondisi1">Kecanduan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kondisi" id="kondisi2" value="tidak-kecanduan">
                                    <label class="form-check-label" for="kondisi2">Tidak Kecanduan</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" form="pilih-kondisi">Pilih</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
