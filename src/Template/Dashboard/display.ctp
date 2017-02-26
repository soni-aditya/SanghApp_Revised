<div class='container mt-5 mb-5'>
<b>
	<?= 
		$this->Html->link("Go Back",['container'=>'Dashboard','action'=>'index'])
	?>
</b>
<div class="card">
  <div class="card-block">
    <h1 class="card-title display-4">
    	<span class="justify-content-center">
    	<?= $post['title'] ?>
    	</span>
    </h1>
    <br>
    <p class="card-text">
    	<?= $post['content'] ?>
    </p>
  </div>
</div>
</div>
