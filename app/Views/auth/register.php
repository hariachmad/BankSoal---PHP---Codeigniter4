<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher:regular">
    <link rel="stylesheet" href="<?= base_url("styles.css") ?>">
    <title>Bank Soal</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="card">
                    <h2 class="card-header">REGISTER</h2>
                    <div class="card-body">
                        <form action="" method="post" class="user">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="fullname" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email"><?= lang('Auth.email') ?></label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="username"><?= lang('Auth.username') ?></label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password"><?= lang('Auth.password') ?></label>
                                <input type="password" name="password" class="form-control" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="pass_confirm">Repeat Password</label>
                                <input type="password" name="pass_confirm" class="form-control" autocomplete="off">
                            </div>

                            <br>

                            <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
                        </form>


                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>