<?php
  
  if (empty($etapas)) {
    echo $this->Html->tag('h3', 'Nenhuma nota registrada.');
  } else {
    echo $this->Html->tag('h3', 'Notas');
  }

?>

<div class="tabbable">
  <ul class="nav nav-tabs">
    <?php
      foreach ($etapas as $k => $etapa) {
        echo $this->Html->tag('li', $this->Html->link($etapa['nome'], '#tab'.($k+1), array('data-toggle' => 'tab')), array('class' => $k==0 ? 'active' : ''));
      }
    ?>
  </ul>
  <div class="tab-content">

    <?php foreach ($etapas as $k => $etapa) : ?>
      <div class="tab-pane <?php echo ($k == 0 ? 'active' : ''); ?>" id="tab<?php echo $k+1;?>">

        <table class="table table-bordered table-striped table-condensed">
          <thead>
            <tr>
              <th>Avaliação</th>
              <th>Peso</th>
              <th>Nota</th>
            </tr>
          </thead>

          <tbody>
            <tr><td colspan="3"></td></tr>
            <?php foreach($etapa['Materia'] as $key=> $materia) :?>

              <tr><?php echo $this->Html->tag('th', $materia['nome'], array('colspan' => '3')); ?></tr>

              <?php foreach($materia['Avaliacao'] as $key => $aval) : ?>

                <tr>
                  <?php
                    echo $this->Html->tag('td', $aval['nome']);
                    echo $this->Html->tag('td', $aval['peso']);
                    echo $this->Html->tag('td', $aval['nota']);
                  ?>
                </tr>

              <?php endforeach; ?>

              <tr>
                <th>Total</th>
                <th><?php echo $materia['pesoTotal']; ?></th>
                <th><?php echo $materia['notaTotal']; ?></th>
              </tr>

              <tr><td colspan="3"></td></tr>

            <?php endforeach; ?>

          </tbody>
        </table>

      </div>
    <?php endforeach; ?>

  </div>
</div>

<?php echo $this->Html->link('Trocar Contexto', 'login', array('class' => 'btn btn-small')); ?>