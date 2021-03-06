<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 User Form With Validation Example</title>
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
input,select {
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
        <form action="<?php echo base_url('public/Physique/storeCp');?>" name="clientphysique_createCp" id="clientphysique_createCp" method="post" accept-charset="utf-8">

          <div class="form-group">
            <label for="numCni">Numero CNI</label>
            <input type="text" id="numCni" name="numCni" value="" placeholder="Numero CNI" />
          </div>

          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="" placeholder="Nom" />
          </div>

          <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" value="" placeholder="Prenom" />
          </div>

          <div class="form-group">
            <label for="civilite">civilite</label>
            <select type="text" id="civilite" name="civilite" value="">
            <option value="">--Sélectionner votre civilite</option>
            <option value="Mr">Mr</option>
            <option value="Melle">Melle</option>
            <option value="Mdme">Mdme</option>
            <select>
          </div>

          <div class="form-group">
            <label for="DateDeNaissance">Date De Naissance</label>
            <input type="text" id="DateDeNaissance" name="DateDeNaissance" value="" placeholder="Date De Naissance">
          </div>

          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" value="" placeholder="Adresse" />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="" placeholder="Email" />
          </div>

          <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" id="telephone" name="telephone" value="" placeholder="Telephone" />
          </div>

          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>

        </form>
      </div>

    </div>

</div>
 <!-- <script>
   if ($("#clientmoral_create").length > 0) {
      $("#clientmoral_create").validate({

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
