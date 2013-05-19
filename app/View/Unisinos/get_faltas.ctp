<?php
  
  if (empty($faltas)) :
    echo $this->Html->tag('h3', 'Nenhuma falta registrada.');
  else :
    echo $this->Html->tag('h3', 'Faltas');

  ?>
    <table class="table table-bordered table-striped table-condensed">
      <thead>
        <tr>
          <th>Matéria</th>
          <th>Faltas</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($faltas as $falta) : ?>        
          <tr>
            <td><?php echo $falta['materia']; ?></td>
            <td><?php echo $falta['quantidade']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php

  endif;

?>

<?php echo $this->Html->link('Trocar Contexto', 'login', array('class' => 'btn btn-small')); ?>