<?php 
  include_once('../authen.php');
  $sql = "SELECT * FROM articles";
  $result = $conn->query($sql);

  $sql = " UPDATE `articles` SET `status` = 'false' WHERE `articles`.`id` = 3; ";
  // print_r($result);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Articles Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- ootstrap-toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Articles Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Articles Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">Contents List</h3>
          <a href="form-create.php" class="btn btn-primary float-right ">Add Articles +</a href="">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Image</th>
              <th>Subject</th>
              <th>Subtitle</th>
              <th>Update</th>
              <th>Adtion</th>
              <th>Adtion</th>
            </tr>
            </thead>
            <tbody>
            <?php 
              $num = 0;
              
              while($row = $result->fetch_assoc() ){
                $num++;
              
            ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><img class="img-fluid d-block mx-auto" src="../../../assets/image/blog/<?= $row['image'] ?>" width="150px" alt=""></td>
                <td><?php echo $row['subject'] ?></td>
                <td><?php echo $row['sub_title'] ?></td>
                <td><?php echo date_format(new DateTime($row['update_at']), "j F Y | H:i"); ?></td>
                <td>
                  <input type="checkbox" data-id= "<?= $row['id'] ?>" name="status" <?= $row['status'] == 'true' ? 'checked' : '' ?> 
                  data-toggle="toggle" data-on="Active" data-off="Block" data-onstyle="success" data-style="ios" disabled>
                </td>
                  
                <td>
                    <a href="form-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning text-white">
                      <i class="fas fa-edit"></i> edit
                    </a> 
                  <a href="#" onclick="deleteItem(<?php echo $row['id']; ?>);" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> Delete
                  </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- bootstrap-toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      // window.location='delete.php?id='+id;
    }
  };

</script>

</body>
</html>
