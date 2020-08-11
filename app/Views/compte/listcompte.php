<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 users List Example - Tutsmake.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>"/>
</head>

<body>

<div class="container mt-5">
<a href="<?php echo base_url('public/Moral/create') ?>" class="btn btn-success mb-2">Create Client Moral</a>
    <a href="<?php echo base_url('public/Physique/createCp') ?>" class="btn btn-success mb-2">Create Client Physique</a>
    <a href="<?php echo base_url('public/Compte/createCm') ?>" class="btn btn-success mb-2">Create Compte</a>
    <a href="<?php echo base_url('public/Moral/index') ?>" class="btn btn-success mb-2">Liste client morals</a>
    <a href="<?php echo base_url('public/Physique/indexCp') ?>" class="btn btn-success mb-2">Liste client physiques</a>
    <a href="<?php echo base_url('public/Compte/indexCm') ?>" class="btn btn-success mb-2">Liste Comptes</a>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="row mt-3">
     <table class="table table-bordered" id="users">
       <thead>
          <tr>
             <th>Id Compte</th>
             <th>Numero Agence</th>
             <th>Numero Compte</th>
             <th>Cle Rib</th>
             <th>Client</th>
             <th></th>
          </tr>
       </thead>
       <tbody>
          <?php if($compte): ?>
          <?php foreach($compte as $ct): ?>
          <tr>
             <td><?php echo $ct['id']; ?></td>
             <td><?php echo $ct['numagence']; ?></td>
             <td><?php echo $ct['numCompte']; ?></td>
             <td><?php echo $ct['cleRib']; ?></td>
             <td><?php echo $ct['clientphysique']; ?></td>
             <td>
              <a href="<?php echo base_url('public/Compte/editCm/'.$ct['id']);?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url('public/Compte/deleteCm/'.$ct['id']);?>" class="btn btn-danger">Delete</a>
             </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script>
    $(document).ready( function () {
      $('#users').DataTable();
  } );
</script>
</body>
</html>
