<div class="container">
    <div class="card text-center">
        <form method="POST" action="<?= base_url('/admin/add'); ?>">
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Materi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="one" placeholder="Mengenal HTML">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Link Materi</label>
                <input type="text" class="form-control" id="link" name="two" onkeyup="tr()" placeholder="https://google.com">
                <button type="submit" class="btn-primary btn">kirim</button>
            </div>
        </form>
        <div class="container text-center">
            <!-- <input type="text" id='link' placeholder="paste link untuk mencoba" onkeyup='tr()'> -->
            <div class="card">
                <iframe width="100%" id='pil' height="450px"></iframe></div>
        </div>
    </div>
</div>
<script>
function tr() {
    var a=document.getElementById('link').value;
    document.getElementById('pil').src=a;
    }
</script>