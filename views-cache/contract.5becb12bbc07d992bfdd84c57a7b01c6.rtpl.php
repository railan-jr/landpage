<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
     <h1>Lista de Contratos <span>Listagem</span> </h1>
        <ol class="breadcrumb">
          <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="/admin/contratos">Listagem</a></li>
        </ol>
    </section>

              <!-- Main content -->
<section class="content">

     <div class="row">
                 <div class="col-md-12">
                    <div class="box box-table">

                              <div class="box-header box-header-list">
                                  <div class="col-md-5" id="d-search">
                                      <div class="form_search">
                                          <form action="/admin/contratos" style="width: 100%;">
                                              <div class="box_search">
                                                  <input type="text" name="search" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Faça uma Busca">
                                                  <button type="submit" class="btn_search fa fa-search"></button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>

                                 <div class="col-md-5" id="p-search">
                                     <div class="form_search">
                                         <form action="/admin/contratos" style="width: 100%;">
                                             <div class="box_search">
                                                 <input type="text" name="consultant" placeholder="Nome da Consultora">
                                                 <button type="submit" class="btn_search fa fa-search"></button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>

                                <a href="/admin/contrato/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>
                              </div>
                        <?php if( getTotal() ){ ?>
                        <div class="small-box bg-green" id="panel">
                            <div class="inner">
                            <h3 style="text-transform: uppercase;">Total de contratos
                                <?php $counter1=-1;  if( isset($consultant) && ( is_array($consultant) || $consultant instanceof Traversable ) && sizeof($consultant) ) foreach( $consultant as $key1 => $value1 ){ $counter1++; ?>
                                <?php echo htmlspecialchars( $value1["total"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                <?php } ?>
                            </h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <span class="small-box-footer">Contratos</span>
                        </div>
                        <?php } ?>
                        </div>
                             <div class="box-body no-padding" id="db-block">
                                <table class="table table-striped">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>RG</th>
                                        <th>Turno</th>
                                        <th>Data</th>
                                      </tr>
                                  </thead>
                                    <tbody>
                                      <?php $counter1=-1;  if( isset($contract) && ( is_array($contract) || $contract instanceof Traversable ) && sizeof($contract) ) foreach( $contract as $key1 => $value1 ){ $counter1++; ?>
                                        <tr>
                                          <td>
                                            <div class="kt-card-user">
                                              <div class="kt-card-user-details">
                                               <i class="fa fa-ellipsis-h count"> </i>
                                               <div class="box-dropdow">
                                                   <a href="/admin/contrato/update/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-pencil"></i> Editar</a>
                                                   <a href="/admin/contrato/view/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-print"></i> Imprimir</a>
                                                   <a href="/admin/recibo/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-print"></i> Recibo</a>
                                                           <a href="/admin/ticket/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-ticket"></i> Ticket</a>
                                                      <a href="/admin/contrato/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                                  </div>
                                                  <a href="">
                                                    <?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                                  </a>
             
                                                </div>
                                              </div>
                                          </td>
                                            <td><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["nrcpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["nrrg"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo encurtarTexto($value1["desperiod"], 8); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["desstart"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <!-- <td>
                                            <a href="/admin/contrato/view/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-warning btn-xs"><i class="fa fa-search"></i> Visualizar</a>
                                            <a href="/admin/contrato/update/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-warning btn-xs"><i class="fa fa-search"></i> editar</a>
                                            <a  href="/admin/contrato/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                                            </td> -->
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                  </table>
                                 <div class="col-md-12">
                                     <div class="col-md-6"></div>
                                     <div class="col-md-6" style="margin: 15px 0; position: relative; text-align: right;">
                                         <button href="" class="btn btn-default imprimir" >Imprimir</button>
                                     </div>
                                 </div>
                             </div>


                                <!-- /.box-body -->


<!--                     print  -->
                     <div class="box-body no-padding" id="db-none" style="display: none;">
                         <table class="table table-striped">
                             <thead>
                             <tr>
                                 <th>Nome</th>
                                 <th>CPF</th>
                                 <th>RG</th>
                                 <th>Data</th>
                             </tr>
                             </thead>
                             <tbody>
                             <?php $counter1=-1;  if( isset($all) && ( is_array($all) || $all instanceof Traversable ) && sizeof($all) ) foreach( $all as $key1 => $value1 ){ $counter1++; ?>
                             <tr>
                                 <td><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                 <td><?php echo htmlspecialchars( $value1["nrcpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                 <td><?php echo htmlspecialchars( $value1["nrrg"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                 <td><?php echo htmlspecialchars( $value1["desstart"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                             </tr>
                             <?php } ?>
                             </tbody>
                         </table>
<!--                     end print-->

                    </div>
                 </div>
     </div>

</section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  var dash = document.querySelectorAll('.count')
var drop = document.querySelectorAll('.box-dropdow')

var dash_count = Array.prototype.slice.call(dash)
var drop_dow = Array.prototype.slice.call(drop)

dash_count.forEach(dash =>{

    dash.addEventListener("click", e =>{

       if(dash.nextElementSibling.style.zIndex === "99"){
            dash.nextElementSibling.style.transform = "translateY(100%)";
            dash.nextElementSibling.style.zIndex = "-99";
       }else{
            dash.nextElementSibling.style.transform = "translateY(0)";
            dash.nextElementSibling.style.zIndex = "99";
       }
    })

})

  document.querySelector('.imprimir').addEventListener('click', e =>{
     // window.onload = function() {
   document.getElementById('db-block').style.display = 'none';
   document.getElementById('db-none').style.display = 'block';
   document.getElementById('p-search').style.display = 'none';
   document.getElementById('d-search').style.display = 'none';
   if(document.getElementById('panel')){
       document.getElementById('panel').style.display = 'none';
   }

   document.querySelector('.send-new').remove(document.querySelector('.send-new'));
          window.print();

          var time = window.setTimeout(function() {

              window.location.href = '/admin/contratos'

          }, 1000);

     // }
  });



</script>