<?php foreach($posts as $post):?>
<div class="container pt-3">
<div class="jumbotron">
    <h1 class="display-4"><?= h($post['title']) ?></h1>
    <small>
       <b><?= h($post['created']->format(DATE_RFC850)); ?></b>
    </small>
            <p>
              <?= $this->Text->truncate($post['content'],200,['ellipsis'=>'.......','exact'=>false]); ?> ..............
            </p>
            <b>
              <?= $this->Html->link("Read More",
                                                [
                                                    'controller'=>'Dashboard',
                                                    'action'=>'display',
                                                    $post['id']

                                                ],
                                                [
                                                    'class'=>''
                                                ]) ?>
            </b>
            </div>
    </div>
</div>
</div>
<?php endforeach; ?>



