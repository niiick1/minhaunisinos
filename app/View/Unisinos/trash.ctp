

    <?php foreach ($etapas as $k => $etapa) {
      
    ?>
      <div class="tab-pane <?php echo ($k == 0 ? 'active' : ''); ?>" id="tab<?php echo $k+1;?>">
        
        <?php foreach ($etapa['Materia'] as $key => $materia) {
            echo $this->Html->tag('h4', $materia['nome']);

        ?>
          <table class="table table-bordered table-striped table-condensed">
            <thead>
              <tr>
                <th>Avaliação</th>
                <th>Peso</th>
                <th>Nota</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($materia['Avaliacao'] as $key => $aval) {
              ?>
                <tr>
                  <?php
                    echo $this->Html->tag('td', $aval['nome']);
                    echo $this->Html->tag('td', $aval['peso']);
                    echo $this->Html->tag('td', $aval['nota']);
                  ?>
                </tr>

              <?php
              }?>
            </tbody>

            <tfoot>
                <?php
                  echo $this->Html->tag('th', 'Total');
                  echo $this->Html->tag('th', $materia['pesoTotal']);
                  echo $this->Html->tag('th', $materia['notaTotal']);
                ?>
            </tfoot>
          </table>
        <?php
        }?>

      </div>
    <?php

    }?>