<div class='row'>
    <div class="list-group col-lg-2 col-md-4  mt-5">
        <button type="button" class="list-group-item list-group-item-action disabled active">
            <span class='mx-auto'><b>Actions</b></span>
        </button>
        <?= $this->Html->link('Introduce a Member',['controller'=>'Members','action'=>'add'],['class'=>'btn list-group-item list-group-item-action justify-content-center']) ?>


    </div>
    <div class="members index col-lg-10 col-md-8 mt-4">
        <h1 class='display-4'><?= __('Members') ?></h1>
        <table class='table'>
            <thead class="thead-default">
                <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('father_or_husband') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_of_retirement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($members as $member): ?>
            <tr>
                <td><?= $this->Number->format($member->id) ?></td>
                <td><?= h($member->name) ?></td>
                <td><?= h($member->father_or_husband) ?></td>
                <td><?= $this->Number->format($member->age) ?></td>
                <td>
                    <?php 
                        $member_posts=array(
                                    'Principal',
                                    'UDT',
                                    'LDT',
                                    'Lecturer',
                                    'Clerk',
                                    'Other Support Staf',
                                    'Peon'
                                    );
                        echo $member_posts[$member->post]; 
                    ?>
                </td>
                <td><?= h($member->school_name) ?></td>
                <td><?= h($member->current_status) ?></td>
                <td><?= h($member->date_of_retirement) ?></td>
                <td>
                <b>
                    <?php  
                        if($member->payment_status == 1 || $member->payment_status =='1'){
                    ?>
                    <span class='text-success'>
                        <?php
                                echo "PAID";
                            }
                        else{
                        ?>
                    </span>
                    <span class='text-danger'>
                        <?php
                            
                                echo "NOT PAID";
                            }
                        ?>
                    </span>
                </b>
                </td>
                <td class="actions">
                    <b>
                        <?= 
                            $this->Html->link(__('Edit'), ['action' => 'edit', $member->id],array('class'=>'text-success')) 
                        ?>
                        &nbsp;&nbsp;
                        <?= 
                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id],array('class'=>'text-danger'), ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) 
                        ?>
                    </b>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>

</div>