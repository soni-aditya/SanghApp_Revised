<div class='row'>
    <div class="list-group col-lg-2 col-md-4  mt-5">
        <button type="button" class="list-group-item list-group-item-action disabled active">
            <span class='mx-auto'><b>Actions</b></span>
        </button>
        <?= $this->Html->link('Introduce new Admin',['controller'=>'Admins','action'=>'add'],['class'=>'btn list-group-item list-group-item-action justify-content-center']) ?>
    </div>
    <div class="members index col-lg-10 col-md-8 mt-4">
        <h1 class='display-4'><?= __('Admins') ?></h1>
        <table class='table'>
            <thead class='thead-default'>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $admin): ?>
                <tr>
                    <td><?= $this->Number->format($admin->id) ?></td>
                    <td><?= h($admin->username) ?></td>
                    <td><?= h($admin->password) ?></td>
                    <td><?= h($admin->created) ?></td>
                    <td><?= h($admin->modified) ?></td>
                    <td class="actions">
                    <b>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->id],array('class'=>'text-success')) ?>
                        &nbsp;&nbsp;
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->id],array('class'=>'text-danger'),['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?>
                    </b>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>