<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card rounded-0">
            <div class="card-header">
              <h3 class="mb-0"><?= __("Sign in") ?></h3>
            </div>
            <div class="card-body">
              <?= $this->Form->create() ?>
              <div class="form-group">
                <?= $this->Form->control('email', [
                                        'type' => 'text',
                                        'label' => __('Email'),
                                        'class' => 'form-control',
                                        'required' => true
                ]); ?>
              </div>
              <div class="form-group">
                <?= $this->Form->control('password', [
                                        'type' => 'password',
                                        'label' => __('Password'),
                                        'class' => 'form-control',
                                        'required' => true
                ]); ?>
              </div>
              <?= $this->Form->button(__('Login'), [
                                        'class' => 'btn btn-success btn-lg float-right'
              ]); ?>
              <?php echo $this->Form->end(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
