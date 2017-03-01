<div class="content-wrapper" style="min-height:654px;">
  <section class="contet-header">
    <div class="col-md-12">
      <h3 class="page-header" style="border-color: gray; border-width: 2px;">Pesan Masuk</h3>
    </div>
  </section>
  <section class="content">
    <center>
      <div class="col-md-12">
        <div class="box">
          <h1>Data Pesan</h1>
          <div class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row" style="padding: 1%;">
              <div class="col-sm-12">
              <?php foreach ($query as $row) { ?>
                <table class="table table-bordered table-striped dataTable" role="grid">
                  	<tr role="row">
                  		<th class="sorting-asc" tabindex="0" aria-sort="ascending" aria-label="Username: activate to sort column descending" aria-sort="ascending" style="width:30%;">Pengirim</th>
                  		<td><?php echo $row->feed_author; ?></td>
                  	</tr>
                  	<tr role="row">
                  		<th class="sorting-asc" tabindex="0" aria-sort="ascending" aria-label="Username: activate to sort column descending" aria-sort="ascending">Email Pengirim</th>
                  		<td><?php echo $row->feed_author_email; ?></td>
                  	</tr>
                  	<tr role="row">
                  		<th class="sorting" tabindex="0" aria-sort="ascending" aria-label="Username: activate to sort column descending">Tanggal Kirim</th>
                  		<td><?php echo date('M d, Y',strtotime($row->feed_date)); ?></td>
                  	</tr>
                  	<tr role="row">
                    	<th class="sorting" tabindex="0" aria-sort="ascending" aria-label="Username: activate to sort column descending">Pesan</th>
                    	<td><?php echo $row->feed_content; ?></td>
                  	</tr>
                  <?php } ?>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
  </section>
</div>
</html>