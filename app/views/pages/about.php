<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="text-center mb-5">
  <h1><?php echo $data['title']; ?></h1>  
</div>
   <h2>Single Database Post</h2>
  <span id="singlePost">Welcome to Single Post <?php echo $data['post']->id ?> called <?php echo $data['post']->title ?> from the database </span>
<?php require APPROOT . '/views/inc/footer.php'; ?>