<table class=" table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Mapel</th>
            <th scope="col">Jawapan</th>
            <th scope="col">Nilai</th>
        </tr>
    </thead>
    <tbody>
        <? foreach ($car as $key => $value) : ?>
            <tr>
                <th scope="row"><?= $value->id_tugas ?></th>
                <td><?= $value->Judul_Materi ?></td>
                <td><a href="<?= $value->jawapan ?>">clik here</a></td>
                <td><a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#base<?=$value->id?>">
                        <? if ($value->nilai == 0) {
                            echo 'nilai';
                        } else {
                            echo $value->nilai;
                        } ?></a></td>

                <!-- Modal -->
                <div class="modal fade" id="base<?=$value->id?>" tabindex="-1" aria-labelledby="base<?=$value->id?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="base<?=$value->id?>Label">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('/admin/nilai')?>" method="POST">
                                    <input type="text" name="nilai" value="<?= $value->nilai ?>">
                                    <input type="text" hidden name="id" value="<?=$value->id?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </tr>
        <? endforeach ?>
    </tbody>
</table>