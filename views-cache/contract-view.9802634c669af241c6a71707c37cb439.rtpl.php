<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CACURSOS | Painel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/res/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/res/admin/plugins/select2/select2.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body>



<div style="width: 90%; margin: 0 auto;">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
    
      <div class="row">
          <div class="col-md-12">
              <div class="invoice">
    
            <div class="row">
            <div class="col-xs-12">
              <h3 class="page-header" style="border: 1px solid #000; padding: 30px 15px; text-align: center;">
                  <strong>
                        TERMO DE CONTRATA????O E MATR??CULA CURSOS<br>
                        PROFISSIONALIZANTES
                  </strong>                
              </h3>
            </div>
            <!-- /.col -->
          </div>
    
          <div class="row invoice-info">
              <div class="col-md-12 invoice-col">
                  <h5><strong>CONTRATADA</strong>: CA Cursos sediada na Rua 02, N?? 115 - Centro, na cidade de Goi??nia<br>
                    inscrita no <strong>N?? 09.068.723/0001-05</strong>.
                    </h5>
                  <br><br>
                  <span><strong>Aluno</strong>: <?php echo htmlspecialchars( $contract["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                  <span><strong>Responsavel pelo Aluno</strong>: <?php if( $contract["desparent"] == '' ){ ?>Eu Mesmo (a)<?php }else{ ?><?php echo htmlspecialchars( $contract["desparent"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></span>
              </div>
            <div class="col-md-12 invoice-col">
              <address>
                <h2><strong>Contratante respons??vel legal e financeiro:</strong></h2><br>
                <span><strong>Nome: </strong><?php echo htmlspecialchars( $contract["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                <span><strong>E-mail: </strong><?php echo htmlspecialchars( $contract["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                <span><strong>CPF: </strong><?php echo htmlspecialchars( $contract["nrcpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>&nbsp;&nbsp;
                <span><strong>RG: </strong><?php echo htmlspecialchars( $contract["nrrg"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>&nbsp;&nbsp;
                <span><strong>Data de Nacimento: </strong><?php echo htmlspecialchars( $contract["desbirthday"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                <span><strong>Telefone: </strong><?php echo htmlspecialchars( $contract["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>&nbsp;&nbsp;
                <span><strong>Celular: </strong><?php echo htmlspecialchars( $contract["nrcellphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                <span><strong>Cidade: </strong><?php echo htmlspecialchars( $contract["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>&nbsp;&nbsp;
                <span><strong>Estado: </strong><?php echo htmlspecialchars( $contract["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                <span><strong>Endere??o: </strong><?php echo htmlspecialchars( $contract["desadress"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>&nbsp;&nbsp;
                <span><strong>Bairro: </strong><?php echo htmlspecialchars( $contract["neighborhood"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>&nbsp;&nbsp;
                <span><strong>CEP: </strong><?php echo htmlspecialchars( $contract["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                <span></li><strong>Inicio da Turma: </strong><?php echo htmlspecialchars( $contract["desstart"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>&nbsp;&nbsp;
                <span><strong>Consultora: </strong><?php echo htmlspecialchars( $contract["desconsultant"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
                <span><strong>Garantia do Curso: </strong><?php echo htmlspecialchars( $contract["desgarant"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br>
              </address>
           
              
              <address>
                <h4><strong>Curso Contratado</strong></h5><br>

                    <span style="text-align: justify;"><?php echo htmlspecialchars( $contract["descourse"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
              </address>

              <h4><b>Per??odo/Contratado:</b></h4><br>

              <span style="text-align: justify;"><?php echo htmlspecialchars( $contract["desperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><br><br>
              <address style="width: 100%; display: block;">
                <h4><strong>Forma de Pagamento</strong></h5><br>
               
                    <span>(&nbsp;&nbsp;) Dinheiro</span><br>
                    <span>(&nbsp;&nbsp;) Cart??o</span><br>
                    <span>(&nbsp;&nbsp;) D??bito</span>
              </address>
                <h4 style="text-align: justify;"><b>NO CASO DE RESCIS??O DO PRESENTE CONTRATADO, PELO CONTRATANTE A EMPRESA N??O RESTITUIR?? O VALOR PAGO.</b></h4><br>
               
                <h4><b>CONTRATO DE PRESTA????O DE SERVI??OS DE TREINAMENTO</b></h4>
                <ul class="nav" style="text-align: justify;">
                    <li style="margin-bottom: 10px; text-align: justify;"> 
                        1 - Como contra-presta????o aos servi??os educacionais prestados pela contratada, o contratante pagar?? ??
                        contratada os valores totais correspondente ao curso contratado.
                    </li>

                    <li style="margin-bottom: 10px; text-align: justify;">
                        2 - Os valores devidos pelo contratante ser??o pagos da seguinte forma: Valor total de forma parcelada apenas
                        por cart??o de cr??dito aceitos pela empresa ou ?? vista de forma ??nica em dinheiro, sendo pago no 1??
                        (primeiro) dia de aula o valor total do curso.
                    </li>
                    <h4><b>NO CASO DE RESCIS??O DO PRESENTE CONTRATADO, PELO CONTRATANTE A EMPRESA N??O
                        RESTITUIR?? O VALOR PAGO.</b>
                    </h4>
                    <li style="margin-bottom: 10px; ">
                        3 - Desist??ncia ou Cancelamento - O ALUNO reconhece que ao efetuar a garantia de vaga do treinamento,
                        motivou uma serie de custos para a CA Cursos, tais como elabora????o de apostilas, reserva de sala de
                        aula, contrata????o de instrutores, e muitos outros custos. Decorrentes, bem como a impossibilidade de
                        suprir a vaga com novo aluno. Desta forma a desist??ncia ou cancelamento far?? o ALUNO ficar sujeito ao
                        pagamento uma multa no valor de <strong> R$ 300,00 (trezentos reais)</strong>.
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        4 - Caso a CA Cursos n??o for notificada em prazo de 72 horas uteis de anteced??ncia, 3 dias uteis antes do
                        in??cio do treinamento em quest??o. A notifica????o deve ser feita por escrito, assinada e entregue
                        pessoalmente, por e-mail ou FAX ao consultor comercial respons??vel pela sua inscri????o na CA Cursos. O
                        aluno s?? poder?? substituir seu treinamento por outro da CA Cursos, caso fa??a a requisi????o at?? 96 horas
                        uteis, antes de iniciar o treinamento no qual estava inscrito inicialmente.
                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        5 -  O presente contrato e termo de contrata????o t??m vig??ncia para o curso contratado e prazo de pagamento
                        contratado.                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        6 - Reposi????o de aulas: A aula s?? ser?? reposta se caso o contratante apresentar atestado m??dico pr??prio ou
                        atestado de ??bito de parentes de primeiro grau.
                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        7 -  As aulas come??am no hor??rio de Bras??lia e s?? ser?? permitido uma toler??ncia de 20 minutos a partir do
                        hor??rio de in??cio das aulas.                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        8 - O curso ?? de car??ter individual e insubstitu??vel n??o podendo ser transferido a nenhuma pessoa apenas ao
                        contratante que assina o contrato.                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        9 - O curso ?? valido apenas para o per??odo contratado n??o podendo ser aplicado e outra data, ou seja, n??o
                        pode ser adiado definido a data de in??cio.                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        10 - As partes elegem o foro da Comarca de Goi??nia-GO. ???Onde os servi??os de treinamentos ser??o prestados???,
                        para qualquer demanda judicial relativa a presente contrato, com exclus??o de qualquer outro, bem como,
                        com expressa ren??ncia de qualquer outro.                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;">
                        11 - Autoriza????o pelo o direito de uso de imagem/fotografia do curso, sem quaisquer ??nus presentes ou futuros
                        para as partes.                        
                    </li>
                    <li style="margin-bottom: 10px; text-align: justify;"> 
                      12 - O aluno fica ciente que precisa trazer no m??nimo 1 aparelho para a aula pr??tica, e caso ele n??o tenha utilizar?? os que temos em sala de aula, n??o podendo reclamar de seu estado de uso.
                   </li>
                    <h4><strong>O Aluno/Contratante declara neste ato:</strong></h4>
                    <li> 1 - Conhecer, concordar e aderir a todas as condi????es gerais do contrato.</li>
                    <li> 2 - Declaro ter recebido c??pia do contrato neste ato.</li><br><br>
                   
                </ul>
                <div class="col-md-12">
                  <div style="display: flex; width: 100%;">
                  <div class="col-md-6">
                    <div style="border-bottom: 1px solid #000;">
                      <span>X     </span>
                  </div>
                    <h4 style="font-size: .8em;"><b>Assinatura do contratante, respons??vel legal e financeiro</b></h4>
                  </div>
                  <div class="col-md-6">
                    <div style="border-bottom: 1px solid #000;">
                      <span>X     </span>
                  </div>
                    <h4 style="font-size: .8em;"><b>Assinatura da consultora responsavel</b></h4>
                  </div>
                </div>
                </div>

               <div class="col-md-8" style="margin: 15px auto; text-align: center;">
                
                 <span>Goi??nia-GO <small><?php echo htmlspecialchars( $contract["descontractdate"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </small></span>
               </div>
               
        </div>
            <!-- /.col -->
           
          </div>
    <!-- end invoice -->
          </div>
          </div>
      </div>
    
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->

  <!-- AdminLTE App -->

  </body>
  </html>
    <script>

    window.onload = function() {

		    	window.print();

		    	var time = window.setTimeout(function() {

					window.location.href = '/admin/contratos'

		    	}, 1000);

	}


</script>