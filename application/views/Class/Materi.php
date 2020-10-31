<div class="pt-3">
    <div class="my-auto">
        <div class="pt-3  card">
            <div class="mx-auto my-auto">
                <!-- <div class="row">
                    <div class="col-md-12"> -->
                        <div class="row">
                            <div class="new col-md-7">
                                <div class="my-3 p-3 bg-white rounded shadow-sm">
                                    <h6 class="border-bottom border-gray pb-2 mb-0">Tugas mu!</h6>
                                    <? foreach ($materi as $key => $bl) : ?>
                                        <div class="media text-muted pt-3">
                                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                                <title><?= $bl->Judul_Materi ?></title>
                                                <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                                            </svg>
                                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                <strong class="d-block text-gray-dark"><?= $bl->Judul_Materi ?></strong>
                                                <br>
                                                <a href="<?= base_url('/user/detail?id=') . $bl->id ?>">lihat tugas</a>
                                            </p>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>

                            <div class="selesai col-md-5">
                                <div class="my-3 p-3 bg-white rounded shadow-sm">
                                    <h6 class="border-bottom border-gray pb-2 mb-0">Tugas Selesai</h6>
                                    <? foreach ($tuntas as $key => $value) : ?>
                                        <div class="media text-muted pt-3">
                                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                                <title>selesai</title>
                                                <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                                            </svg>
                                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><?= $value->Judul_Materi ?></strong>
                                                    <a href="<?= $value->jawapan ?>">Lihat</a>
                                                </div>
                                                <span class="d-block"><?= $value->nilai ?></span>
                                            </div>
                                        </div>
                                    <? endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->


</div>