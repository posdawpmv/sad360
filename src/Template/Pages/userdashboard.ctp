<?php
$this->assign('title', 'HOME');

$this->Html->css('easypiechart.css', ['block' => true]);
$this->Html->css('weatherstyle.css', ['block' => true]);
$this->Html->css('theme.css', ['block' => true]);

$this->Html->script('loadweather', ['block' => true]);

$this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.4/jquery.easypiechart.min.js', ['block' => true]);
$this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.0.2/jquery.simpleWeather.min.js', ['block' => true]);

$this->start('tb_body_start');
echo '<body>';
$this->end();
?>

<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            <div class="well well-lg userdata">
                <?= $this->Html->image('defaultuser.png', ['alt' => 'Imagem do Usuário', 'class' => 'img-circle img-responsive center-block']); ?>
                <h3 class="text-primary">&lt;NOME&gt;</h3>
                <p>&lt;DEPARTAMENTO&gt;</p>
                <p>&lt;PAPEL&gt;</p>
                <p>&lt;CPF&gt;</p>
                <a href="mailto:sad@sad360.com" class="center-block">&lt;EMAIL&gt;</a>
                <a class="user-control" href="#">
                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar
                </a>
                <a class="user-control" href="#">
                    <span class="glyphicon glyphicon-off"></span>&nbsp;Sair
                </a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-primary panel-colorful">
                <div class="panel-heading">
                    <h3 class="panel-title">Avaliação Atual</h3>
                </div>
                <div class="panel-body text-center">
                    <span class="chart" data-percent="71">
                        <span class="percent"></span>
                    </span>
                    <p class="lead chart-legend">completa</p>
                </div>
                <div class="panel-footer">Prazo limite &lt;XX/XX/XX&gt; -
                    <a href="#">continuar...</a>
                </div>
            </div>
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Últimas Avaliações</h3>
                        </div>
                        <div class="panel-body">
                            <ol>
                                <li>Avaliação X - Em Andamento</li>
                                <li>Avaliação Y - Finalizada</li>
                                <li>Avaliação Z -&nbsp;Finalizada</li>
                            </ol>
                        </div>
                    </div>

        </div>
        
        <div class="col-md-4">
            
                    <div class="bg-info dashboard-card" id="weather">
                        <p class="lead">Previsão do Tempo</p>
                        <p>Carregando...</p>
                    </div>

                    <div class="bg-warning dashboard-card">
                        <div class="dashboard-card-icon">
                            <span class="glyphicon glyphicon-time"></span>
                        </div>
                        <div class="dashboard-card-details">
                            <h1>03</h1>
                            <p>questionários pendentes</p>
                        </div>
                    </div>
            
                    <div class="bg-success dashboard-card">
                        <div class="dashboard-card-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                        </div>
                        <div class="dashboard-card-details">
                            <h1>02</h1>
                            <p>avaliações realizadas</p>
                        </div>
                    </div>
            
        </div>
    </div>
</div>

<?= $this->start('tb_footer'); ?>
<footer>
    <div class="jumbotron">
        <div class="container">
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
</footer>
<?= $this->end(); ?>

<?= $this->Html->scriptStart(['block' => true]); ?>
//Custom Scripts
$(function () {
    $('.chart').easyPieChart({
        barColor: '#5A5',
        scaleColor: false,
        size: 150,
        lineWidth: 15,
        onStep: function (from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });
});
<?= $this->Html->scriptEnd(); ?>

<?php
    $this->start('tb_body_end');
    echo '</body>';
    $this->end();
?>
