<div class="heroes view">
<h2><?php echo __('Hero'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Side'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hero['Side']['name'], array('controller' => 'sides', 'action' => 'view', $hero['Side']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hero['Group']['name'], array('controller' => 'groups', 'action' => 'view', $hero['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->image('http://cdn.dota2.com/apps/dota2/images/heroes/'.str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hero'), array('action' => 'edit', $hero['Hero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hero'), array('action' => 'delete', $hero['Hero']['id']), array(), __('Are you sure you want to delete # %s?', $hero['Hero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sides'), array('controller' => 'sides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Side'), array('controller' => 'sides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles Heros'), array('controller' => 'roles_heros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roles Hero'), array('controller' => 'roles_heros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Heros'), array('controller' => 'users_heros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Hero'), array('controller' => 'users_heros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Roles Heros'); ?></h3>
	<?php if (!empty($topHeroRoles)): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Hero Id'); ?></th>
        <th><?php echo __('Level'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($topHeroRoles as $rolesHero): ?>
		<tr>
			<td><?php echo $rolesHero['RolesHero']['id']; ?></td>
			<td><?php echo $rolesHero['Role']['name']; ?></td>
			<td><?php echo $hero['Hero']['name']; ?></td>
            <td><?php echo $rolesHero['RolesHero']['level']; ?></td>
			<td><?php echo $rolesHero['RolesHero']['created']; ?></td>
			<td><?php echo $rolesHero['RolesHero']['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles_heros', 'action' => 'view', $rolesHero['RolesHero']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles_heros', 'action' => 'edit', $rolesHero['RolesHero']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles_heros', 'action' => 'delete', $rolesHero['RolesHero']['id']), array(), __('Are you sure you want to delete # %s?', $rolesHero['RolesHero']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Roles Hero'), array('controller' => 'roles_heros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users Heros'); ?></h3>
	<?php if (!empty($hero['UsersHero'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Hero Id'); ?></th>
		<th><?php echo __('Experience'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hero['UsersHero'] as $usersHero): ?>
		<tr>
			<td><?php echo $usersHero['id']; ?></td>
			<td><?php echo $usersHero['user_id']; ?></td>
			<td><?php echo $usersHero['hero_id']; ?></td>
			<td><?php echo $usersHero['experience']; ?></td>
			<td><?php echo $usersHero['created']; ?></td>
			<td><?php echo $usersHero['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users_heros', 'action' => 'view', $usersHero['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users_heros', 'action' => 'edit', $usersHero['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users_heros', 'action' => 'delete', $usersHero['id']), array(), __('Are you sure you want to delete # %s?', $usersHero['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Hero'), array('controller' => 'users_heros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
