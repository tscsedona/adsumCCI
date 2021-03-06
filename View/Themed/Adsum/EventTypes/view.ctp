
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">

            <ul class="nav nav-list bs-docs-sidenav">			
                <li><?php echo $this->Html->link(__('Edit Event Type'), array('action' => 'edit', $eventType['EventType']['id']), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('New Event Type'), array('action' => 'add'), array('class' => '')); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Event Type'), array('action' => 'delete', $eventType['EventType']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $eventType['EventType']['id'])); ?> </li>
            </ul><!-- .nav nav-list bs-docs-sidenav -->

        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="eventTypes view">

            <h2><?php echo __('Event Type: ') . h($eventType['EventType']['title']); ?></h2>

            <hr />
            
        </div><!-- .view -->


        <div class="related">

            <h3><?php echo __('Events'); ?></h3>

            <?php if (!empty($eventType['Event'])): ?>

                <table class="table table-striped table-bordered">
                    <tr>
                        <th><?php echo __('Title'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($eventType['Event'] as $event):
                        ?>
                        <tr>
                            <td><?php echo $event['title']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id']), array('class' => 'btn btn-mini')); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id']), array('class' => 'btn btn-mini')); ?>
        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $event['id'])); ?>
                            </td>
                        </tr>
    <?php endforeach; ?>
                </table><!-- .table table-striped table-bordered -->

<?php endif; ?>


            <div class="actions">
<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> ' . __('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->

        </div><!-- .related -->


    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
