<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Edit User Form With Validation Example</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

</head>
<style>
body {
    background-color:skyblue;
}
label {
    width:200px;
}
input {
    width:500px;
    height:50px;
}
form {
    margin-top:30px;
    margin-left:280px;
}
button {
    margin-left:200px;
}
</style>
<body>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
    <a href="<?php echo base_url('public/Moral/create') ?>" class="btn btn-success mb-2">Create Client Moral</a>
    <a href="<?php echo base_url('public/Physique/createCp') ?>" class="btn btn-success mb-2">Create Client Physique</a>
    <a href="<?php echo base_url('public/Compte/createCm') ?>" class="btn btn-success mb-2">Create Compte</a>
    <a href="<?php echo base_url('public/Moral/index') ?>" class="btn btn-success mb-2">Liste client morals</a>
    <a href="<?php echo base_url('public/Physique/indexCp') ?>" class="btn btn-success mb-2">Liste client physiques</a>
    <a href="<?php echo base_url('public/Compte/indexCm') ?>" class="btn btn-success mb-2">Liste Comptes</a>
    <span class="d-none alert alert-success mb-3" id="res_message"></span>

    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('public/Compte/updateCm');?>" name="edit-compte" id="edit-compte" method="post" accept-charset="utf-8">

           <input readonly name="id" class="form-control" id="Id" value="<?php echo $compte['id'] ?>">

          <div class="form-group">
          <label for="numagence">Numero Agence</label>
            <input type="text" id="numagence" name="numagence" placeholder="Numero Agence" value="<?php echo $compte['numagence'] ?>">
          </div>

          <div class="form-group">
          <label for="numCompte">Numero Compte</label>
            <input type="text" id="numCompte" name="numCompte" placeholder="Numero Compte" value="<?php echo $compte['numCompte'] ?>">
          </div>

          <div class="form-group">
          <label for="cleRib">Cle Rib</label>
            <input type="text" id="cleRib" name="cleRib" placeholder="Cle Rib" value="<?php echo $compte['cleRib'] ?>">
          </div>

          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>

        </form>
      </div>

    </div>

</div>
 <!-- <script>
   if ($("#edit-user").length > 0) {
      $("#edit-user").validate({

    rules: {
      name: {
        required: true,
      },

      email: {
        required: true,
        maxlength: 50,
        email: true,
      },
    },
    messages: {

      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        },
    },
  })
}
</script> -->
</body>
</html>
