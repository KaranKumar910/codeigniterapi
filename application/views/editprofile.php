<?php include 'header.php'; ?>

<div class="container">
    <div class="content-wrapper">
        <div class="col-md-6">
            <h2 style="color: white" align="center">Profile Details</h2>
            <form class="" method="POST" action="<?= site_url('welcome/updateProfile/'.$key->id) ?>">

                <div class="card">
                    <div class="card-heading bg-success">
                        <h3 align="center">User Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" name="name" value="<?= $key->name ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="<?= $key->email ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" value="<?= $key->password ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" value="<?= $key->image ?>" class="form-control">
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success form-control">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
