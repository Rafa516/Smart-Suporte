<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="content">
    <div class="content-inside">
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a style="background-color: #01A9DB;color: white" class="nav-link active" id="home-tab"
                        data-toggle="tab" role="tab" aria-controls="home" aria-selected="false"><b>Início</b></a>
                </li>
            </ul>
              <center><img src="res/user/img/logo.png"  class="logo"alt="">
             <?php if( $usuario["loja"] == 'Loja/Empresa 1' ){ ?>

            <p>Bem vindo <b><?php echo getUsuarioNome(); ?></b> ao Sistema Web de Suporte Técnico da Loja/Empresa 1.</p>
            <p>Realize a abertura do chamado para o técnico do suporte realizar a verificação ou manutenção.</center>

            <?php }elseif( $usuario["loja"] == 'Loja/Empresa 2' ){ ?>

            <p>Bem vindo <b><?php echo getUsuarioNome(); ?></b> ao Sistema Web de Suporte Técnico da Loja/Empresa 2.</p>
            <p>Realize a abertura do chamado para o técnico do suporte realizar a verificação ou manutenção.</center>

            <?php }elseif( $usuario["loja"] == 'Loja/Empresa 3' ){ ?>

            <p>Bem vindo <b><?php echo getUsuarioNome(); ?></b> ao Sistema Web de Suporte Técnico da Loja/Empresa 3.</p>
            <p>Realize a abertura do chamado para o técnico do suporte realizar a verificação ou manutenção.</center>


            <?php } ?>

       
            <hr class="my-4" />


        </div>
    </div>
</div>



      