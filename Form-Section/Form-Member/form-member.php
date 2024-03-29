<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Member AMBIS CAMP</title>
    <link rel="stylesheet" href="form-member.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <h1 id="title"> Formulir Pendaftaran Member</h1>
            <p id="description">Ambis Camp</p>
        </header>

        <form id="survey-form" name="member">
            <section class="data-diri">
                <h4 class="form"><b>Data diri</b></h4>
                <div class="form">
                    <label for="nama" id="name-label" class="label-animation"> Nama Lengkap</label>
                    <input type="username" class="form-control input-animation" name="nama" required>
                </div>

                <div class="form">
                    <label for="email" id="email-label" class="label-animation"> Email</label>
                    <input type="email" class="form-control input-animation" name="email" required>
                </div>

                <div class="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputWa">No. WhatsApp</label>
                            <input type="tel" minlength="11" maxlength="14" name="nowa" placeholder="+62"
                                class="form-control" id="noWa">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputTelp">No. Telp</label>
                            <input type="tel" minlength="11" maxlength="14" name="notelp" class="form-control"
                                placeholder="+62" id="noTelp">
                        </div>
                    </div>
                </div>

                <div class="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Kota</label>
                            <input type="text" name="kota" class="form-control" id="inputCity" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputProv">Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" id="inputState" required>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <label for="sekolah" class="label-animation">Asal Sekolah/Universitas
                        /Institusi
                    </label>
                    <input type="text" name="asal" class="form-control input-animation" required>
                </div>

                <div class="form">
                    <p>Jenis Kelamin</p>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jkelamin" value="Laki-laki"
                                id="customRadioKlm1" required>
                            <label class="form-check-label" for="customRadioKlm1">
                                Laki-laki
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jkelamin" value="Perempuan"
                                id="customRadioKlm2">
                            <label class="form-check-label" for="customRadioKlm2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <p>Pendidikan:</p>
                    <select name="pendidikan" id="status" class="form-control" required>
                        <option value="0" disabled selected value>Pilih pendidikan
                        </option>
                        <option value="Kelas 7" name="status">Kelas 7 SMP/sederajat</option>
                        <option value="Kelas 8" name="status">Kelas 8 SMP/sederajat</option>
                        <option value="Kelas 9" name="status">Kelas 9 SMP/sederajat</option>
                        <option value="Kelas 10" name="status">Kelas 10 SMA/sederajat</option>
                        <option value="Kelas 11" name="status">Kelas 11 SMA/sederajat</option>
                        <option value="Kelas 12" name="status">Kelas 12 SMA/sederajat</option>
                        <option value="Gap" name="status">Gap year</option>
                        <option value="Mahasiswa" name="status">Mahasiswa</option>
                        <option value="Fresh graduate" name="status">Fresh graduate</option>
                        <option value="Guru" name="status">Guru/dosen</option>
                        <option value="Umum" name="status">Umum</option>
                    </select>
                </div>
            </section>

            <section class="add-quest">
                <h4 class="form"><b>Pertanyaan wawancara</b></h4>
                <div class="form">
                    <p>Apakah kamu yakin ingin menjadi Member Ambis Camp?</p>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="yakin" value="Ya" id="customRadioYakin1"
                                checked>
                            <label class="form-check-label" for="customRadioYakin1">
                                Ya
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="yakin" value="Ragu-ragu"
                                id="customRadioYakin2">
                            <label class="form-check-label" for="customRadioYakin2">
                                Ragu-ragu
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="yakin" value="Tidak"
                                id="customRadioYakin3">
                            <label class="form-check-label" for="customRadioYakin3">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <p>Apakah bisa membagi waktu antara dunia <i>real life</i> dan <i>virtual</i> ?</p>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membagiWaktu" value="Ya"
                                id="customRadioRlv1" checked>
                            <label class="form-check-label" for="customRadioRlv1">
                                Ya
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membagiWaktu" value="Tidak"
                                id="customRadioRlv2">
                            <label class="form-check-label" for="customRadioRlv2">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <p>Kamu ingin bergabung ke dalam kelas apa?
                        <span class="clue">(Pilih yang sesuai)</span>
                    </p>
                    <div class="form-group row" name="kelas">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelass" value="saintek"
                                    id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Saintek
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelass" value="soshum"
                                    id="gridCheck2">
                                <label class="form-check-label" for="gridCheck2">
                                    Soshum
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="kelass" value="ambisUTBK"
                                    id="gridCheck3">
                                <label class="form-check-label" for="gridCheck3">
                                    Ambis UTBK
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-10 d-none">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="kelas" checked>
                                <label class="form-check-label">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <p>Yuk pilih ekstra ambis yang ingin kamu ikuti! <span class="clue">(Maks.2)</span></p>
                    <div class="row" name="ekstraAmbis" required>
                        <div class="form-group col-sm-6">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss"
                                        value="Astronomi" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">
                                        Astronomi
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss"
                                        value="Kesehatan" id="customCheck2">
                                    <label class="form-check-label" for="customCheck2">
                                        Kesehatan
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss"
                                        value="Informatika" id="customCheck3">
                                    <label class="form-check-label" for="customCheck3">
                                        Informatika
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss"
                                        value="Psikologi" id="customCheck4">
                                    <label class="form-check-label" for="customCheck4">
                                        Psikologi
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss" value="Filsafat"
                                        id="gridCheck5">
                                    <label class="form-check-label" for="gridCheck5">
                                        Filsafat
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss" value="Hukum"
                                        id="gridCheck6">
                                    <label class="form-check-label" for="gridCheck6">
                                        Hukum
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss" value="Bahasa"
                                        id="gridCheck7">
                                    <label class="form-check-label" for="gridCheck7">
                                        Bahasa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss" value="e-Sport"
                                        id="gridCheck8">
                                    <label class="form-check-label" for="gridCheck8">
                                        e-Sport
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss"
                                        value="Desain Digital" id="gridCheck9">
                                    <label class="form-check-label" for="gridCheck9">
                                        Desain Digital
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss"
                                        value="Pendidikan" id="gridCheck10">
                                    <label class="form-check-label" for="gridCheck10">
                                        Pendidikan
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss" value="Sastra"
                                        id="gridCheck11">
                                    <label class="form-check-label" for="gridCheck11">
                                        Sastra dan kepenulisan
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss"
                                        value="SeniMusik" id="gridCheck12">
                                    <label class="form-check-label" for="gridCheck12">
                                        Seni musik
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbiss" value="SeniRupa"
                                        id="gridCheck13">
                                    <label class="form-check-label" for="gridCheck13">
                                        Seni rupa
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-10 d-none">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ekstraAmbis" checked>
                                    <label class="form-check-label">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <label for="formFileMultiple" class="form-label">Bukti Follow dan Share <span class="clue">(silahkan
                            upload banyak file sekaligus/dijadikan 1 folder)</span></label>
                    <input class="form-control" type="file" name="FileUpload" id="formFileMultiple" multiple>
                </div>

                <div class="form">
                    <label for="ta" id="text-area-label" class="label-animation"> Apa yang membuat kamu tertarik menjadi
                        Member Ambis Camp?</label>
                    <textarea name="ketertarikan" id="text-area" class="form-control input-animation" cols="30" rows="5"
                        required>
          </textarea>
                </div>

                <div class="form">
                    <label for="ta" id="text-area-label" class="label-animation">Apakah kamu akan mengundurkan diri
                        apabila situasi dan kondisi grup tidak sesuai dengan yang diharapkan? Berikan alasan.</label>
                    <textarea name="rekan" id="text-area" class="form-control input-animation" cols="30" rows="5"
                        required>
          </textarea>
                </div>
            </section>


            <div class="privacy form">
                <h5><b>Catatan Privasi!</b></h5>
                <p>Dengan menekan tombol 'Submit', kamu menyatakan bahwa data pribadi yang kamu isi benar, dan kamu
                    setuju untuk memberikan data kamu untuk keperluan pendataan peserta Ambis Camp. Data dirimu dijamin
                    hanya untuk keperluan program Ambis Camp saja dan tidak akan digunakan untuk hal lain di luar itu.
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="setuju" id="invalidCheck" required
                        name="setuju">
                    <label class="form-check-label" value="setuju" for="invalidCheck">
                        Saya setuju dengan pernyataan tersebut.
                    </label>
                    <div class="invalid-feedback">
                        Kamu harus menyetujuinya sebelum submit ya :)
                    </div>
                </div>
            </div>

            <div class="form">
                <div class="btn alert alert-dismissible fade show my-alert d-none" role="alert">
                    <strong>Terima kasih!</strong> Data kamu sudah kami terima. Mohon tunggu pemberitahuan lebih lanjut
                    ya!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <button type="submit" value="Upload" class="btn btn-kirim btn-success">Submit
                </button>
                <button class="btn btn-loading d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </form>
        <footer>
            Created with <i class="bi bi-heart-fill"></i> by <a href="../../index.html">Ambis Camp</a>
        </footer>
    </div>





    <!-- JS  Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- form js -->
    <script>
    const sP1UyJoMp4YLEuNSfA =
        'https://script.google.com/macros/s/AKfycbz1BH1NJtyWHRsIeQq0dVr9S8uALd4ss_Q9shz-kx9JeLZRu1wQXPDlJFjIWow9cO4/exec'
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');
    const formMember = document.forms['member'];

    let kelasS = document.querySelectorAll('input[name="kelass"]');
    let kelas = ''
    let kelas_input = document.querySelector('input[name="kelas"]');

    let ekstraAmbisS = document.querySelectorAll('input[name="ekstraAmbiss"]');
    let ekstraAmbis = ''
    let ekstraAmbis_input = document.querySelector('input[name="ekstraAmbis"]');

    function onSuccess(data) {
        document.getElementById('submitBtn').value = "Uploaded";
    }
    formMember.addEventListener('submit', e => {
        e.preventDefault()
        // ketika submit di klik
        // tampilkan tombol loading, hilangkan kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        for (var i = 0; i < kelasS.length; i++) {
            if (kelasS[i].checked === true) {
                kelas += kelasS[i].value + ', '
            }
        }
        kelas_input.setAttribute("value", kelas)
        for (var i = 0; i < ekstraAmbisS.length; i++) {
            if (ekstraAmbisS[i].checked === true) {
                ekstraAmbis += ekstraAmbisS[i].value + ', '
            }
        }
        ekstraAmbis_input.setAttribute("value", ekstraAmbis)
        var folderId = "1_Ta20r1k_O_IBxjBfyzoxAd22HEzPjp8";

        function uploadFiles(data) {
            var file = data.myFile;
            var folder = DriveApp.getFolderById(folderId);
            var createFile = folder.createFile(file);
            return createFile.getUrl();
        }
        fetch(sP1UyJoMp4YLEuNSfA, {
                method: 'POST',
                body: new FormData(formMember)
            })
            .then(response => {
                // tampilkan tombol kirim, hilangkan loading
                btnLoading.classList.toggle('d-none');
                btnKirim.classList.toggle('d-none');
                // tampilkan alert
                myAlert.classList.toggle('d-none');
                // reset form
                formMember.reset();
                console.log('Success!', response)
            })
            .catch(error => console.error('Error!', error.message))
    })
    </script>
</body>

</html>
