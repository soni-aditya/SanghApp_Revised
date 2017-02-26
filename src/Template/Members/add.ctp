<div class='row'>
    <div class="list-group col-lg-2 col-md-4  mt-5">
        <button type="button" class="list-group-item list-group-item-action disabled active">
            <span class='mx-auto'><b>Actions</b></span>
        </button>
        <?= $this->Html->link('Member Lists',['controller'=>'Members','action'=>'index'],['class'=>'btn list-group-item list-group-item-action justify-content-center']) ?>
    </div>
    <div class='col-lg-10 col-md-8 col-sm-12'>
        <div class="members form container mt-4">
            <h1 class='display-4'><?= h('Introduce new Member') ?></h1>
            <div class='col-lg-8 col-md-8 col-sm-12 offset-lg-1 offset-md-1 mt-4 mb-5'>
                <?= $this->Form->create($member) ?>
                <div class='form-group'>
                    <?php
                        echo $this->Form->input('name',array(
                                                        'type'=>'text',
                                                        'class'=>'form-control',
                                                        'required'=>'required'
                                                            ));
                    ?>
                </div>
                <?php
                    echo $this->Form->input('father_or_husband',array(
                                                                'class'=>'form-control',
                                                                'required'=>'required'
                                                                    ));
                ?>
                <br>
                <?php
                    echo $this->Form->input('age',array(
                                                    'type'=>'number',
                                                    'class'=>'form-control',
                                                    'required'=>'required'
                                                        ));
                ?>
                <br>
                <?php
                    echo $this->Form->input('post',array(
                                                    'type'=>'select',
                                                    'class'=>'form-control',
                                                    'options'=>[
                                                            'Principal',
                                                            'UDT',
                                                            'LDT',
                                                            'Lecturer',
                                                            'Clerk',
                                                            'Other Support Staf',
                                                            'Peon'],
                                                    'empty'=>'choose one',
                                                    'required'=>'required'
                                                        ));
                ?>
                <br>
                <?php
                    echo $this->Form->input('school_name',array(
                                                    'type'=>'text',
                                                    'class'=>'form-control',
                                                    'required'=>'required'
                                                        ));
                ?>
                <br>
                <?php
                    echo $this->Form->input('current_status',array(
                                                    'type'=>'text',
                                                    'class'=>'form-control',
                                                    'required'=>'required'
                                                        ));
                ?>
                <br>
                
                <div class='form-group'>
                    <?php
                        echo $this->Form->input("date_of_retirement",array(
                                                                'class'=>'form-control mt-2',
                                                                'type'=>'date',
                                                                'required'=>'required'
                                                            ));
                    ?>
                </div>
                <div class='form-check'>
                    <?php
                        echo $this->Form->input('payment_status',array(
                                                        'type'=>'checkbox',
                                                        'class'=>'form-check-input ml-1 mt-2'
                                                            ));
                    ?>
                    <br>
                    <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-outline-primary col-lg-6 col-md-6 col-sm-6 offset-lg-3 offset-md-3 offset-sm-3 mybut')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
