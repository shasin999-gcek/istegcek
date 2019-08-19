<?php require('views/partials/admin_header.view.php'); ?>

<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> ISTE GCEK Registered Students - 2018</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Adm no</th>
              <th>Name</th>
              <th>Mob No</th>
              <th>Branch</th>
              <th>Semester</th>
              <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
              <th>Adm no</th>
              <th>Name</th>
              <th>Mob No</th>
              <th>Branch</th>
              <th>Semester</th>
              <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($students as $student) : ?>
          	<tr>
          		<td><?= $student->adm_no; ?></td>
          		<td><?= $student->name; ?></td>
                <td><?= $student->mob_no; ?></td>
          		<td><?= $student->branch_name; ?></td>
          		<td><?= $student->semester; ?></td>
          		<td>
                    <button class="btn btn-success btn-sm" onclick="acceptApplication('<?= $student->id ?>')">Accept</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteApplication('<?= $student->id ?>')"><i class="fa fa-trash"></i></button>
                </td>
          	</tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted"></div>
</div>

<?php require('views/partials/admin_footer.view.php'); ?>