<div class="col-md-12">
    <div class="card">
        <div class="card-header"><?php echo $sub_judul; ?></div>
        <div class="card-body">

        <?php foreach ($isi_tabel as $value) : ?>

        <div style="border: 1px solid green; padding: 15px; margin-bottom: 15px">
			<div class="row">
				<div class="col-sm-1">
					<img width="100px" height="100px" src="<?= base_url('assets/user.png') ?>" class="img-thumbnail">
				</div>
				<div class="col-sm-11">
					Penulis <strong><?= $value->penulis; ?></strong>
					<br>
					<small><?=$value->created_at; ?></small>
				</div>
			</div>
			<div class="row" style="margin-top: 10px">
				<div class="col-sm-12">
					<h4><b><?=$value->judul; ?></b></h4>
					<p><?=$value->isi; ?></p>
				</div>
			</div>
		</div> <!-- border stop -->

		<?php endforeach; ?>

    	</div>
	</div>
</div>