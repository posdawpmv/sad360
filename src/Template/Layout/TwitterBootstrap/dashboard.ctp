<?php
use Cake\Core\Configure;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->Html->css('theme', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', array($this->request->controller, $this->request->action)) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>

<?php

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('tb_navbar_class', 'navbar-fixed-top');

?>
    
<?php
    $this->start('tb_sidebar_actions');
?>
        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Alternatives'), ['controller' => 'alternatives', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Evaluations'), ['controller' => 'evaluations', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Departments'), ['controller' => 'departments', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Questionnaires'), ['controller' => 'questionnaires', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Questions'), ['controller' => 'questions', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Answers'), ['controller' => 'answers', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Users'), ['controller' => 'users', 'action' => 'index']); ?></li>
        </ul>
        <hr/>
<?php
    $this->end();
    $this->assign('tb_sidebar', $this->fetch('tb_sidebar_actions'));
?>
                  
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?= $this->fetch('tb_sidebar') ?> 
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?php
                /**
                * Default `flash` block.
                */
                if (!$this->fetch('tb_flash')) {
                    $this->start('tb_flash');
                    if (isset($this->Flash))
                        echo $this->Flash->render();
                    $this->end();
                }
                $this->end();
                echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>
        
<footer class="clearfix">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-6">
                            <dl id="descricao-rodape">
                                <dt>Curso:</dt>
                                <dd>Desenvolvimento de Aplicações Web - Especialização 2014/1</dd>
                                <dt>Disciplina:</dt>
                                <dd>Trabalho de Conclusão de Curso</dd>
                                <dt>Orientador</dt>
                                <dd>Prof. Dr. Marcos Kutova</dd>
                                <dt>Sistema desenvolvido por:</dt>
                                <dd><a href="http://ead10.virtual.pucminas.br/moodle/user/profile.php?id=32582">Fernando H. Resende Campos</a></dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <nav id="nav-rodape" class="text-center">
                                <a href="http://www.pucminas.edu.br/">
                                    <?= $this->Html->image('logo/pucminas.png', ['alt' => 'PUC Minas', 'class' => 'img-responsive center-block']); ?>
                                </a>
                                <a href="http://www.pucminas.br/virtual/">PUC Minas Virtual</a>
                                <a href="http://ead10.virtual.pucminas.br/moodle/login/index.php">AVA - Ambiente Virtual de Aprendizagem</a>
                                <a href="https://www.sistemas.pucminas.br/sgaaluno3/SilverStream/Pages/pgAln_LoginSSL.html">SGA - Aluno</a>
                                <a href="#top" class="customButton"> Voltar ao Topo</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>