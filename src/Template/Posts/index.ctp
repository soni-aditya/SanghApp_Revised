<div class="row">
<div class='col-lg-2 col-md-2 col-sm-12 mt-5 ml-2 mr-2'>
    <button type="button" class="list-group-item list-group-item-action disabled active">
            <span class='mx-auto'><b>Actions</b></span>
        </button>
        <?= $this->Html->link('Add new Post',['controller'=>'Posts','action'=>'add'],['class'=>'btn list-group-item list-group-item-action justify-content-center']) ?>
</div>
<div class='col-lg-9 col-md-9 col-sm-12 mt-5' >
<?php foreach($posts as $post):?>
        <div class="card bg-faded">
          <div class="card-block">
            <h1 class="display-4 card-title">
                <?= h($post['title']) ?>
            </h1>
            <h6 class="card-subtitle mb-2 text-muted">
                <small>
                    <b><?= h($post['created']->format(DATE_RFC850)); ?></b>
                </small>
            </h6>
            <p class="card-text">
                <?= $this->Text->truncate($post['content'],200,['ellipsis'=>'.......','exact'=>false]); ?> ..............
            </p>
            <b>
            <?= $this->Html->link("Read More",
                                                [
                                                    'controller'=>'Posts',
                                                    'action'=>'display',
                                                    $post['id']

                                                ],
                                                [
                                                    'class'=>''
                                                ]) ?>
            </b>
            <br><br>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <?= 
                    $this->Html->link(__('Edit'), ['action' => 'edit', $post->id],
                    array('class'=>'btn btn-outline-success pull-left')) 
                ?>
                </div> 
                <div class="col-lg-6 col-md-6 col-sm-6"> 
                <?=
                    $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id],
                    array('class'=>'btn btn-outline-danger pull-right'), ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) 
                ?>
                </div>
            </div>
          </div>
        </div>
        <br><br> 
<?php endforeach; ?>
              
</div>
</div>