<div class="content-wrapper" style="min-height:654px;">
  <section class="contet-header">
    <div class="col-md-12">
      <h3 class="page-header" style="border-color: gray; border-width: 2px;">Kategori</h3>
    </div>
  </section>
  <section class="content">
    <center>
      <div class="col-md-12">
        <div class="box">
          <h1>Data Kategori</h1>
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
              <div class="col-xs-6">
                <div class="dataTables_filter pull-right">
                  <label>
                    Cari:
                    <input type="search" class="form-control input-sm" name="" placeholder="Cari...">
                  </label>
                </div>
              </div>
            </div>
            <div class="row" style="padding: 1%;">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped dataTable" role="grid">
                  <thead>
                    <tr role="row">
                      <th class="sorting-asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" aria-sort="ascending">Category</th>
                      <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending">Short Description</th>
                      <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending">Parents</th>
                      <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($query as $row) { ?>
                    <tr role="row" class="">
                      <td><?php echo $row->category_name; ?></td>
                      <td><?php echo $row->category_desc; ?></td>
                      <td class=""><?php echo $row->category_parent; ?></td>
                      <td class="">
                        <div class="btn-group">
                          <button type="button" class="btn btn-flat btn-info">Action</button>
                          <button type="button" class="btn btn-flat btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url('category/CCategory/Edit/'.$row->category_id); ?>">Edit</a></li>
                            <li><a href="<?php echo base_url('pengguna/CPengguna/Delete/'.$row->category_id); ?> ">Delete</a></li>
                          </ul>
                        </div>
                      </td>
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