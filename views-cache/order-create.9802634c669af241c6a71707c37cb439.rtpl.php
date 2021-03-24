<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
      <h1> Ordem . <span>Novo</span></h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/orders">Order</a></li>
        <li class="active"><a href="">Novo</a></li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">

         <div class="row">
           <div class="col-md-12">
             <div class="box-panel">

                      <!-- /.box-header -->
                 <form class="form-os" role="form" action="/admin/order/create" method="post">
                             <div class="box-body">
                                    <div calss="etapa-1">
                                        <div class="form-group">
                                          <label for="desname">Aluno</label>
                                          <input type="text" class="form-control" id="desname" name="desname" placeholder="Digite o nome">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="desstate">Estado</label>
                                              <select name="desstate" id="estados" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
      
                                              </select>
                                              </div>

                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                 <label for="descity">Cidade</label>
                                                    <select name="descity" id="cidades" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
            
                                                    </select>
                                               </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nrphone">Telefone</label>
                                                <input type="text" class="form-control" id="nrphone" name="nrphone" data-inputmask="'mask': '(99) 99999-9999'" data-mask="">
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="desshift">Turno</label>
                                                <input type="curso" class="form-control" id="desshift" name="desshift" placeholder="Curso">
                                              </div>
                                        </div>

                                        <div class="form-group">
                                           <label>Consultora</label>
                                            <input type="text" name="desconsultant" class="form-control" placeholder="Consultora">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Professor</label>
                                                <input type="text" name="desteacher" class="form-control" placeholder="Professor">
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Auxiliar</label>
                                                <input type="text" name="deshelp" class="form-control"  placeholder="Auxiliar">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Valor</label>
                                                  <input type="number" name="desprice" class="form-control" step="0.01" placeholder="0,01">
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Forma de Pagamento</label>
                                                  <select name="payment" class="form-control">
                                                      <option selected value="1">A vista</option>
                                                      <option value="2">Cartão de Crédito</option>
                                                  </select>
                                              </div>
                                        </div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Curso concluido</label>
                                                <input type="text" name="course_con" class="form-control"  placeholder="Curso concluido">
                                            </div>
                                      </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Data</label>
                                               <input type="text" name="desdate" class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                           </div>
                                        </div>

                                    </div>
                                    <!-- end create -->
                            </div>
                                   <!-- /.box-body -->
                            <div class="box-footer" style="border-top: none;">
                              <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
                            </div>
                   </form>
             </div>
           </div>
         </div>

      </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
 