<div class="container">
    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Judul</th>
            <th>Isi</th>
        </thead>
        <tbody>
            <?php

                foreach ($isi as $d){
                    ?>
                <tr>
                    <td><?= $d->id_post ?> </td>
                    <td><?= $d->judul ?> </td>
                    <td><?= $d->isi ?></td>
                </tr>
            <?php        
                }
            ?>
        </tbody>
    </table>
</div>