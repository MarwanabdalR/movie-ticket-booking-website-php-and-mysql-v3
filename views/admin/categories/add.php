<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Categories </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= URL; ?>admin">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
      </nav>
    </div>

    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php } ?>

    <?php if (!empty($message)) { ?>
        <div class="alert alert-success"><?= $message; ?></div>
    <?php } ?>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <!-- <p class="card-description"> Basic form layout </p> -->
            <form class="forms-sample" method="POST" action="<?= URL; ?>admin/category/add">
              <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
      
    </div>

    <div class="row">
      
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Categories</h4>
            <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
            </p>
            <table class="table table-bordered">
              <thead>
                <tr>
                    <th>#</th>
                  <th> Name </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>

                <?php $count = 1; foreach ($categories as $category) { ?>
                    <tr>
                        <td><?= $count; ?></td>
                      <td> <?= $category->name; ?> </td>
                      <td>
                        <a class="btn btn-info btn-sm" href="<?= URL; ?>admin/category/edit/<?= $category->id; ?>">
                            Edit
                        </a>

                        <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return confirmDelete(this);" data-href="<?= URL; ?>admin/category/delete/<?= $category->id; ?>">
                            Delete
                        </a>
                      </td>
                    </tr>
                <?php $count++; } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>

  </div>
  <!-- content-wrapper ends -->

  <script>
      function confirmDelete(self) {
        swal({
          title: "Confirm Delete ?",
          text: "Are you sure you want to delete this ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = self.getAttribute("data-href");
          }
        });
        return false;
      }
  </script>