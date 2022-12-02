<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Tidak Kecanduan</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header">
                        Cek Tidak Kecanduan
                    </div>
                    <div class="card-body">
                        @if (session('status') === 'Kecanduan')
                            <div class="alert alert-warning">
                                <b>Kemungkinan besar anda sudah kecanduan bermain game.</b>
                                <br>
                                Jenis perilaku kecanduan game yang anda alami adalah {{ session('perilaku') }}
                            </div>
                        @elseif (session('status') === 'Tidak Kecanduan')
                            <div class="alert alert-success">
                                <b>Kemungkinan besar Anda tidak kecanduan bermain game.</b>
                                <br>
                            </div>
                        @endif

                        <form action="{{ route('check.tidak-kecanduan') }}" method="post" id="cek-tidak-kecanduan">
                            @csrf
                            <div class="form-group">
                                <label for="peduli">Ketika anda bermain game anda tidak memedulikan siapa pun bahkan untuk kebutuhan diri sendiri, misalnya makan.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="peduli" id="peduli1" value="1" required>
                                    <label class="form-check-label" for="peduli1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="peduli" id="peduli2" value="0">
                                    <label class="form-check-label" for="peduli2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="terhibur">Permainan internet membuat anda terhibur karena pusing dengan tugas-tugas sekolah.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="terhibur" id="terhibur1" value="1" required>
                                    <label class="form-check-label" for="terhibur1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="terhibur" id="terhibur2" value="0">
                                    <label class="form-check-label" for="terhibur2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="menang">Anda senang apabila memenangkan permainan.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="menang" id="menang1" value="1" required>
                                    <label class="form-check-label" for="menang1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="menang" id="menang2" value="0">
                                    <label class="form-check-label" for="menang2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="baru">Anda merasa senang apabila menemukan permainan internet yang baru.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="baru" id="baru1" value="1" required>
                                    <label class="form-check-label" for="baru1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="baru" id="baru2" value="0">
                                    <label class="form-check-label" for="baru2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tersenyum">Anda selalu tersenyum dan tertawa saat bermain permainan internet.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tersenyum" id="tersenyum1" value="1" required>
                                    <label class="form-check-label" for="tersenyum1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tersenyum" id="tersenyum2" value="0">
                                    <label class="form-check-label" for="tersenyum2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sibuk">Anda jarang membantu orang tua di rumah karena sibuk dengan game.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sibuk" id="sibuk1" value="1" required>
                                    <label class="form-check-label" for="sibuk1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sibuk" id="sibuk2" value="0">
                                    <label class="form-check-label" for="sibuk2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="menolak">Anda sering menolak dan membantah.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="menolak" id="menolak1" value="1" required>
                                    <label class="form-check-label" for="menolak1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="menolak" id="menolak2" value="0">
                                    <label class="form-check-label" for="menolak2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kebutuhan">Orang tua memenuhi akan kebutuhan anda agar anda tidak marah.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kebutuhan" id="kebutuhan1" value="1" required>
                                    <label class="form-check-label" for="kebutuhan1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kebutuhan" id="kebutuhan2" value="0">
                                    <label class="form-check-label" for="kebutuhan2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group" id="pertanyaan3">
                                <label for="level">Ketika anda bermain game, anda selalu meningkatkan level permainan selama kurang lebih 5 - 10 menit.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="level" id="level1" value="1" required>
                                    <label class="form-check-label" for="level1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="level" id="level2" value="0">
                                    <label class="form-check-label" for="level2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group" id="pertanyaan2">
                                <label for="waktu">Anda menambah keseringan/intensitas waktu bermain anda.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="waktu" id="waktu1" value="1" required>
                                    <label class="form-check-label" for="waktu1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="waktu" id="waktu2" value="0">
                                    <label class="form-check-label" for="waktu2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group" id="pertanyaan2">
                                <label for="gelisah">Anda mengaku merasa gelisah apabila sehari tidak bermain game.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gelisah" id="gelisah1" value="1" required>
                                    <label class="form-check-label" for="gelisah1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gelisah" id="gelisah2" value="0">
                                    <label class="form-check-label" for="gelisah2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group" id="pertanyaan2">
                                <label for="ketagihan">Anda yang pada awalnya bermain permainan selama 1 jam permainan, namun semakin lama semakin bertambah pula intensitas waktu anda untuk bermain game.</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ketagihan" id="ketagihan1" value="1" required>
                                    <label class="form-check-label" for="ketagihan1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ketagihan" id="ketagihan2" value="0">
                                    <label class="form-check-label" for="ketagihan2">Tidak</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" form="cek-tidak-kecanduan">Cek Sekarang</button>
                        <a class="btn btn-secondary" href="{{ config('app.url') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
