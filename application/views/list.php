<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD in CI - list-users</title>
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
        <div class="row">
            <div class="col-md-12">
                <?php $success = $this->session->userdata('success');
                if ($success != "") {
                ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php
                } ?>

                    <?php $failure = $this->session->userdata('failure');
                    if ($failure != "") {
                    ?>
                        <div class="alert alert-success"><?php echo $failure; ?> </div>
                        <?php
                    } ?>

                    </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-6">
                            <h3>view user</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?php echo base_url() . 'index.php/user/create'; ?>" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                </div>

            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-stripped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                        <?php if (!empty($users)) {
                            foreach ($users as $user) { ?>
                                <tr>
                                    <td><?php echo $user['user_id'] ?></td>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . 'index.php/user/edit/' . $user['user_id'] ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() . 'index.php/user/delete/' . $user['user_id'] ?>" class="btn btn-warning">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">Records not found </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

</body>

</html>