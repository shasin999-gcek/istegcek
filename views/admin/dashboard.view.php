<?php require('views/partials/admin_header.view.php'); ?>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> ISTE GCEK Registered Students - 2018</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Reg ID</th>
            <th>Adm no</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>District</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          	<th>Reg ID</th>
            <th>Adm no</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>District</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($students as $student) : ?>
          	<tr>
          		<td><?= $student->id; ?></td>
          		<td><?= $student->adm_no; ?></td>
          		<td><?= $student->name; ?></td>
          		<td><?= $student->branch_name; ?></td>
          		<td><?= $student->semester; ?></td>
          		<td><?= $student->district; ?></td>
          	</tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted"></div>
</div>

<?php require('views/partials/admin_footer.view.php'); ?>