<h3>Selecione o contexto</h3>

<ul class="nav nav-tabs nav-stacked">
  <?php
    foreach ($contexts as $k=>$value) :
  ?>

      <li><?php echo $this->Html->link($value, array('controller' => 'unisinos', 'action' => 'menu', $k)); ?></li>

  <?php
    endforeach;
  ?>
</ul>

<div class="logo">
  <p>Caso não esteja visualizando os períodos letivos, favor informar bug com o seu curso.</p>
</div>