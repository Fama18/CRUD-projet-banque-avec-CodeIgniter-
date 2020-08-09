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
        <form action="<?php echo base_url('public/Moral/update');?>" name="edit-clientmoral" id="edit-clientmoral" method="post" accept-charset="utf-8">

           <input readonly name="id" class="form-control" id="Id" value="<?php echo $clientmoral['id'] ?>">

          <div class="form-group">
            <label for="nomEntreprise">Nom de l'entreprise</label>
            <input type="text" name="nomEntreprise" class="form-control" id="nomEntreprise" placeholder="Please enter your enterprise name" value="<?php echo $clientmoral['nomEntreprise'] ?>">
          </div>

          <div class="form-group">
            <label for="AdresseEntreprise">Adresse de l'entreprise</label>
            <input type="text" name="AdresseEntreprise" class="form-control" id="AdresseEntreprise" placeholder="Entrer l'adresse de l'entreprise" value="<?php echo $clientmoral['AdresseEntreprise'] ?>">
          </div>

          <div class="form-group">
            <label for="RaisonSocial">Raison sociale</label>
            <input type="text" name="RaisonSocial" class="form-control" id="RaisonSocial" placeholder="Raison sociale" value="<?php echo $clientmoral['RaisonSocial'] ?>">
          </div>

          <div class="form-group">
            <label for="numIdent">Numero d'identification</label>
            <input type="text" name="numIdent" class="form-control" id="numIdent" placeholder="Numero d'identification" value="<?php echo $clientmoral['numIdent'] ?>">
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