<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 Form Validation Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
         
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url('/submit_success') ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('name')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('name'); ?>
            </div>
        <?php }?>
      </div>
       

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('phone')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('phone'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Favourite colour</label>
        <input type="text" name="fav_colour" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('fav_colour')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('fav_colour'); ?>
            </div>
        <?php }?>
      </div>

      <select type="select" name="gender"  class="form-select col-lg-12" aria-label="Default select example">
      <option selected disabled>Gender (not required - the last option)</option>
      <option value="Male">male</option>
      <option value="Female">Female</option>
      <option value="Non-binary">Non-binary</option>
      <option value="Transgender">Transgender</option>
      <option value="Intersex">Intersex</option>
      <option value="0">I prefer not to say</option>
      </select>

      <div class="form-group" style="margin-top:3%">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>

  </div>
</body>

</html>