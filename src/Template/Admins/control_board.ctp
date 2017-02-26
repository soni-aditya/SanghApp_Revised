<div class='row mt-5 mb-5'>
	<h1 class='display-4 col-lg-8 col-md-10 offset-2 col-md-1 text-info'>
	<?=
		h('Welcome Admin ,here is your Dashboard')
	?>
	</h1>
</div>
<div class="row mt-5 mb-5">
		<div class="col-lg-5 col-md-11 col-sm-11 text-muted ml-5 mr-5">
			<h3 class="display-4">
				Hi Admin,
				<br>
				Hope You will make good use of your Authority and Stand Upto your Credibility
			</h3>
		</div>
		<div class="col-lg-5 col-md-11 col-sm-11 mr-5 ml-5">
			<div id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="card">
			    <div class="card-header" role="tab" id="headingOne">
			      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				      <h5 class="mb-0">
				        <i class="fa fa-gears"></i>
				        &nbsp;&nbsp;&nbsp;&nbsp;
				        Go To Admin Panel
				      </h5>
				   </a>
			    </div>

			    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
			      <div class="card-block">
			        Here you will be able to manage the number of Admins 
			        <br>
			        <p class='text-muted'>
			        	Admins are the ones with the special privlages like you yourself.They are the ones with the total authority of editing the number of users and also create/Update or Delete the Posts.
			        </p>
			        <?=
			        	$this->Html->link("Go",['controller'=>'admins','action'=>'index'],array(
			        		'class'=>'btn btn-outline-danger pull-right'
			        																		));
			        ?>
			        <br>
			      </div>
			    </div>
			  </div>
			  <br><br>
			  <div class="card">
			    <div class="card-header" role="tab" id="headingTwo">
			      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none">
				      <h5 class="mb-0">
				        <i class="fa fa-user-circle-o"></i>
				        &nbsp;&nbsp;&nbsp;&nbsp;
				        Go To Members Panel
				      </h5>
				    </a>
			    </div>
			    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="card-block">
			        Here you will be able to manage the number of Members 
			        <br>
			        <p class='text-muted'>
			        	Here you can Create/Edit and Delete the information of different Members belonging to <b>Madhya Pradesh Sikshak Sangh</b>
			        </p>
			        <?=
			        	$this->Html->link("Go",['controller'=>'Members','action'=>'index'],array(
			        		'class'=>'btn btn-outline-danger pull-right'
			        																		));
			        ?>
			        <br>
			      </div>
			    </div>
			  </div>
			  <br><br>
			  <div class="card">
			    <div class="card-header" role="tab" id="headingThree">
			      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none">
				      <h5 class="mb-0">
				        <i class="fa fa-archive"></i>
				        &nbsp;&nbsp;&nbsp;&nbsp;
				        Maintain Post Archives
				      </h5>
			      </a>
			    </div>
			    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
			      <div class="card-block">
			        Here you will be able to manage your Posts and Circulars
			        <br>
			        <p class='text-muted'>
			        	This website is designed with a motive to Broad various informations and Circulars related to different activities and also it serves a purpose to Notice Board
			        </p>
			        <?=
			        	$this->Html->link("Go",['controller'=>'posts','action'=>'index'],array(
			        		'class'=>'btn btn-outline-danger pull-right'
			        																		));
			        ?>
			        <br>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
</div>  