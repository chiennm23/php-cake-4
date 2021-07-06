<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class Room') ?></th>
                    <td><?= $student->has('class_room') ? $this->Html->link($student->class_room->name, ['controller' => 'ClassRooms', 'action' => 'view', $student->class_room->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($student->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($student->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
