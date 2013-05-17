<?php

echo $this->Form->create('Login', array('class' => 'form-signin'));

    echo $this->Session->flash();

    echo $this->Html->tag('h3', 'Login Unisinos');

    echo $this->Form->input('user', array('class' => 'input-block-level', 'placeholder' => 'User', 'label' => false));
    echo $this->Form->input('password', array('class' => 'input-block-level', 'placeholder' => 'Password', 'label' => false));

    echo $this->Form->button('Login', array('class' => 'btn btn-primary'));

  echo $this->Form->end();

?>

<div class="logo">
  <?php echo $this->Html->image('logo-unisinos.png'); ?>
</div>