<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
         <a href="<?=base_url()?>" class="logo mr-auto"><img src="<?=base_url('media_library/images/' . __session('logo'))?>" alt="" class="img-fluid" width="90px"></a> 
        <h2><?=strtoupper(__session('school_name'))?></h2> 
        <p><?=__session('tagline')?></p>
      </div>
    </div><!-- End Breadcrumbs -->
   <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
<!-- CONTENT -->
<div class="col-lg-12 col-md-12 col-sm-12 ">
	<h5 class="page-title mb-3">SAMBUTAN <?=strtoupper(__session('_headmaster'))?></h5>
	<div class="card rounded-0 border border-secondary mb-3">
		<div class="card-body pb-0 pt-0">
			<p class="card-text"><?=get_opening_speech()?></p>
		</div>
	</div>
	<!-- Get Random Posts -->
	<?php $query = get_random_posts(5); if ($query->num_rows() > 0) { ?>
		<h5 class="page-title mt-3 mb-3">Baca Juga</h5>
		<?php foreach($query->result() as $row) { ?>
			<div class="card rounded-0 border border-secondary mb-3">
				<div class="card-body p-3">
					<h5 class="card-title"><a href="<?=site_url('read/'.$row->id.'/'.$row->post_slug)?>"><?=$row->post_title?></a></h5>
					<p class="card-text mb-0"><?=substr(strip_tags($row->post_content), 0, 185)?></p>
					<div class="d-flex justify-content-between align-items-center mt-1">
						<small class="text-muted"><?=date('d/m/Y H:i', strtotime($row->created_at))?> - Oleh <?=$row->post_author?> - Dilihat <?=$row->post_counter?> kali</small>
						<a href="<?=site_url('read/'.$row->id.'/'.$row->post_slug)?>" class="btn btn-sm action-button rounded-0"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php } ?>
</div>

 </div>
</div>
</section>
