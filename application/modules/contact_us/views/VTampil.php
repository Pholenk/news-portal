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
          <h1>Data Pesan Masuk</h1>
          <div class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row" style="margin:1%;">
              <div class="col-xs-6">
                <div class="dataTables_length pull-left">
                  <label>Tampil
                    <select name="show" class="form-control input-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                    </select>
                  </label>
                </div>
              </div>
            </div>
            <div class="row" style="padding: 1%;">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped dataTable" role="grid">
                  <thead>
                    <tr role="row">
                      <th class="sorting-asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" aria-sort="ascending">Pengirim</th>
                      <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending">Pesan</th>
                      <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending">Tanggal Kirim</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($query as $row) { ?>
                    <tr role="row" class="">
                      <td><?php echo $row->feed_author; ?></td>
                      <td><a href="<?php echo base_url('contact_us/CContact_us/Tampil/'.$row->feed_id);?>"><?php echo $row->feed_content; ?></a></td>
                      <td class=""><?php echo date('M d, Y',strtotime($row->feed_date)); ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
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