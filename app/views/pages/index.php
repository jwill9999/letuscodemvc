<?php require APPROOT . '/views/inc/header.php';?>


  <div class="text-center">
        <h1><?php echo $data['title']; ?></h1>
  </div>  

   <div class="row mt-5">
     <div class="col-md-6 ">
       <h1 class="mb-5">Database Results</h1>
       <table class="table table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
        </tr>
      </thead>
      <tbody>
      <tr>
      <?php foreach ($data['posts'] as $post): ?>
          <td><?php echo $post->id ?></td>
          <td><?php echo $post->title ?></td>
        </tr>
      <?php endforeach?>
      </tbody>
    </table>
     </div>
   </div>

   <div class="row mt-5">
    <div class="col-md-12">
        <h2>Database set up and instructions</h2>
    </div>
  </div>


<?php require APPROOT . '/views/inc/footer.php';?>
