<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD in CI - create-user</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD App</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
        <h3>Create user</h3>
        <hr>
        <form method="POST" name="createUser" action="<?php echo 'http://localhost/crudci/index.php/user/create' ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control">
                        <?php echo form_error('name'); ?>
                    </div>

                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" value="<?php echo set_value("email"); ?>" class="form-control">
                        <?php echo form_error('email'); ?>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">Cancel</a>

                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>