<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
      <h1>
        Clientes . <span>Simulações</span>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin/simulator">Simulaçoes</a></li>
      </ol>
    </section>

                  <!-- Main content -->
  <section class="content">

   <div class="row">
  	 <div class="col-lg-12">
  		  <div class="box box-table">

                <div class="box-header box-header-list">

                  <!--<a href="/admin/aluno/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>-->

                  <div class="form_search">
                    <form action="/admin/simulator">
                      <div class="box_search">
                        <input type="text" name="search" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder=" Buscar..."> 
                        <button type="submit" class="btn_search fa fa-search"></button>
                      </div>
                    </form>
                  </div>

                </div>
             <div class="box-body no-padding">
                         <table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Nome</th>
                                          <th>Telefone</th>
                                           <th>E-mail</th>
                                           <th>CPF</th> 
                                            <th>Cidade</th>
                                           <th>Estado</th>
                                           <th>CEP</th>
                                        </tr>
                                      </thead>
                                  <tbody>
                                    <?php $counter1=-1;  if( isset($simulator) && ( is_array($simulator) || $simulator instanceof Traversable ) && sizeof($simulator) ) foreach( $simulator as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                    <td>
                                      <div class="kt-card-user">
                                        <div class="kt-card-user-details">
                                         <i class="fa fa-ellipsis-h count"> </i>
                                         <div class="box-dropdow">
                                             <!--<a href="/admin/simulator/<?php echo htmlspecialchars( $value1["idsimulator"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-gg"></i> Visualizar</a>-->
                                              <a href="/admin/simulator/<?php echo htmlspecialchars( $value1["idsimulator"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                            </div>
                                        <a href="">
                                           <?php echo htmlspecialchars( $value1["idsimulator"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </a>
                                    </div>
                                 </div>
                                    </td>
                                    <td><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["nrcpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["nrcep"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>

                                  </tr>
                                  <?php }else{ ?>
                                  <tr>
                                      <td colspan="12">Nemhuma Simulaçõa foi Encontrada!</td>
                                  </tr>
                                  <?php } ?>
                                  </tbody>
                        </table>
              
                  <!-- start paginator -->
                  <div class="col-sm-12">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                      <ul class="pagination">
                        <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                              <li>
                                <a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                            </li>
                         <?php } ?>
                      </ul>
                    </div>
                  </div>
                  <!-- end paginator -->
              
            </div>
            <!-- /.box-body -->
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
</script>