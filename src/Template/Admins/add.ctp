<div class='row'>
    <div class="list-group col-lg-2 col-md-4 col-sm-12 mt-5">
        <button type="button" class="list-group-item list-group-item-action disabled active">
            <span class='mx-auto'><b>Actions</b></span>
        </button>
        <?= $this->Html->link('Admin Lists',['controller'=>'Admins','action'=>'index'],['class'=>'btn list-group-item list-group-item-action justify-content-center']) ?>
    </div>
    <div class='col-lg-10 col-md-8 col-sm-12 mt-5'>
            <h1 class='display-4 col-lg-8 col-md-12 col-sm-12 offset-lg-1'>
                <?= h('Introduce new Admin') ?>
            </h1>
            <br><br>
            <div class="members form container mt-4 col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2">
                <?= $this->Form->create($admin) ?>
                    <div class='form-group'>
                    <?= 
                        $this->Form->input('username',array(
                                                        'type'=>'email',
                                                        'class'=>'form-control',
                                                        'required'=>'required',
                                                        'minlength'=>'2'
                                                        )); 
                    ?>
                    </div>
                    <br>
                    <div class='form-group'>
                    <?= 
                        $this->Form->input('password',array(
                                                        'type'=>'password',
                                                        'class'=>'form-control',
                                                        'required'=>'required'
                                                            ));
                    ?>
                    </div>
                    <br><br>
                <?= $this->Form->button(__('Submit'),array(
                                                    'class'=>'btn btn-outline-primary col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2'
                                                        )) ?>
                <?= $this->Form->end() ?>
            </div>
    </div>
</div>
