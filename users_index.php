<div class="card">
  <div class="card-header bg-dark text-white border-dark"><strong>Users Data</strong></div>
  <div class="card-body">
    <a class="btn btn-dark mb-2" href="?page=users&action=add">Add</a>
    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
          <th width="50px">No.</th>
          <th width="300px">Username</th>
          <th width="300px">Role</th>
          <th width="100px"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $sql = "SELECT * FROM users ORDER BY username ASC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td align="center">
              <a class="btn btn-warning" href="?page=users&action=update&id=<?php echo $row['user_id']; ?>">
                <i class="fas fa-edit"></i>
              </a>
              <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=users&action=delete&id=<?php echo $row['user_id']; ?>">
                <i class="fas fa-window-close"></i>
              </a>
            </td>
          </tr>
        <?php
        }
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>