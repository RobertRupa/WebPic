<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <div class="form-group">
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username', [
                'type' => 'text',
                'label' => __('Username'),
                'class' => 'form-control'
                ]);
            echo $this->Form->control('email', [
                'type' => 'text',
                'label' => __('Email'),
                'class' => 'form-control'
                ]);
            echo $this->Form->control('password', [
                'type' => 'password',
                'label' => __('Password'),
                'class' => 'form-control'
                ]);
            echo $this->Form->control('locale', [
                'label' => __('Locale'),
                'type' => 'select',
                'class' => 'form-control',
                'options' => [
                    'en_US' => 'EN',
                    'pl_PL' => 'PL'
                ]
                ]);
            echo $this->Form->control('role', [
                'label' => __('Role'),
                'type' => 'select',
                'class' => 'form-control',
                'options' => [
                    '0' => __('Admin'),
                    '1' => __('User')
                ]
                ]);
        ?>
        <br>
        <?php echo $this->Form->submit(__('Save'), [
            'class' => 'btn btn-primary float-right'
        ]); ?>
    </div>
    <?= $this->Form->end() ?>
</div>