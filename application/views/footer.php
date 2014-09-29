        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="<?=base_url()?>assets/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/vendor/jquery.slimscroll.min.js"></script>
    </body>

<!--login modal-->
<div id="denuncia" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h1 class="text-center">Faça seu login ou Cadastre-se</h1>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
              <li><a href="#cadastro" role="tab" data-toggle="tab">Registro</a></li>
              <li><a href="#denuncias" role="tab" data-toggle="tab">Denúncias</a></li>
              <li><a href="#novadenuncias" role="tab" data-toggle="tab">Nova Denúncia</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="login">
                <form class="form col-md-12 center-block">
                    <div class="form-group">
                      <input type="email" class="form-control input-lg" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                      <input type="senha" class="form-control input-lg" placeholder="Senha" required="required">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-lg btn-block">Logar</button>
                    </div>
                </form>
              </div>
              <div class="tab-pane" id="cadastro">
                <form class="form col-md-12 center-block" onsubmit="return checkForm(this);">
                    <div class="form-group">
                      <input type="text" class="form-control input-lg" placeholder="Nome" required="required">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control input-lg" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                      <input type="senha" class="form-control input-lg" placeholder="Senha" required="required">
                    </div>
                    <div class="form-group">
                      <input type="confirmarsenha" class="form-control input-lg" placeholder="Confirme a senha" required="required">
                    </div>
                    
                    <div class="form-group">
                      <button class="btn btn-primary btn-lg btn-block">Cadastrar</button>
                    </div>
                </form>
              </div>
              <div class="tab-pane" id="denuncias">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Data da Denúncia</th>
                      <th>Tipo</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="active">
                      <td>1</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="success">
                      <td>3</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="info">
                      <td>5</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="warning">
                      <td>7</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="danger">
                      <td>9</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                  </tbody>
                </table>   
              </div>

              <div class="tab-pane" id="novadenuncias">
                <div class="row">
                    <article>
                        <div id="map-canvas2"></div>
                    </article>   
                </div> 
                <form class="form col-md-12 center-block" onsubmit="return checkForm(this);">
                    <div class="form-group">
                      <input type="text" class="form-control input-lg" placeholder="Nome" required="required">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control input-lg" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                      <input type="senha" class="form-control input-lg" placeholder="Senha" required="required">
                    </div>
                    <div class="form-group">
                      <input type="confirmarsenha" class="form-control input-lg" placeholder="Confirme a senha" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Imagem</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-lg btn-block">Cadastrar</button>
                    </div>
                </form>
              </div>


            </div>
          </div>
          <div class="modal-footer">
              <div class="col-md-12">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
              </div>    
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="comoFunciona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Como Funciona</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>

</html>
