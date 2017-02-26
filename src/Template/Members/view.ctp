<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($member->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Father Or Husband') ?></th>
            <td><?= h($member->father_or_husband) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post') ?></th>
            <td><?= h($member->post) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Name') ?></th>
            <td><?= h($member->school_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Status') ?></th>
            <td><?= h($member->current_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($member->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($member->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Retirement') ?></th>
            <td><?= h($member->date_of_retirement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($member->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($member->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= $member->payment_status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
