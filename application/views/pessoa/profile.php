<!-- page content -->
<div class="container-fluid" role="main">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="card-title col-4">
                    <h3><?php echo $pessoa['nome'];?></h3>
                </div>                          
                <div class=" form-group col-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Procurar">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>       
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive avatar-view" src="<?php echo base_url('assets/_img/avatar.jpg')?>" alt="Avatar" title="Change the avatar">
                            </div>
                        </div>

                        <div class="card-body">
                            <hr>
                            <h6><strong>Codigo</strong></h6>
                            <p><?php echo $pessoa['codigo'];?></p>
                            <hr>
                            <h6><strong>Cidade</strong></h6>
                            <p><?php echo $endereco['cidade'];?></p>
                            <hr>
                            <h6><strong>Data Cadastro</strong></h6>
                            <p><?php echo date('d/m/Y', strtotime($pessoa['data_cadastro']));?></p>
                        </div>
                        <a href="<?php echo site_url('pessoa/edit/'.$pessoa['IDPessoa']); ?>" class="btn btn-info btn-xs">Editar</a> 
                        <a href="<?php echo site_url('pessoa') ?>" class="btn btn-primary btn-xs">Voltar</a> 
                    </div>
                    
                    <div class="col-9">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="dados-tab" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" aria-selected="false">Dados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pedidos-tab" data-toggle="tab" href="#pedidos" role="tab" aria-controls="pedidos" aria-selected="false">Ultimos Pedidos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="produtos-tab" data-toggle="tab" href="#produtos" role="tab" aria-controls="produtos" aria-selected="false">Produtos mais comprados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="resumo-tab" data-toggle="tab" href="#resumo" role="tab" aria-controls="resumo" aria-selected="false">Resumo Financeiro</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <div class="row mt-5">

                                    <div class="col-4" align="center">                             
                                        <span>
                                            <img src="<?php echo base_url('assets/_img/dollars.png')?>">
                                        </span>

                                        <h6 class="mt-3 mb-3">------</h6> 
                                        <h6>Valor Medio Pedidos</h6>  

                                    </div>
                                    <div class="col-4" align="center">                             
                                        <span>
                                            <img src="<?php echo base_url('assets/_img/calendar.png')?>">
                                        </span>

                                        <h6 class="mt-3 mb-3">------</h6> 
                                        <h6>Data ultimo pedido</h6>  

                                    </div>

                                    <div class="col-4" align="center">                             
                                        <span>
                                            <img src="<?php echo base_url('assets/_img/cart.png')?>">
                                        </span>

                                        <h6 class="mt-3 mb-3">------</h6> 
                                        <h6>Nº pedidos</h6> 

                                    </div>

                                </div>

                                <div class="row mt-5">

                                    <div class="col-4" align="center">                             
                                        <span>
                                            <img src="<?php echo base_url('assets/_img/graph.png')?>">
                                        </span>

                                        <h6 class="mt-3 mb-3">R$ 0,00</h6> 
                                        <h6>Total em R$</h6>  

                                    </div>
                                    <div class="col-4" align="center">                             
                                        <span>
                                            <img src="<?php echo base_url('assets/_img/calendar.png')?>">
                                        </span>

                                        <h6 class="mt-3 mb-3">------</h6> 
                                        <h6>Data ultimo pedido</h6>  

                                    </div>

                                    <div class="col-4" align="center">                             
                                        <span>
                                            <img src="<?php echo base_url('assets/_img/cart.png')?>">
                                        </span>

                                        <h6 class="mt-3 mb-3">------</h6> 
                                        <h6>Nº pedidos</h6> 

                                    </div>

                                </div>
                            </div>                           

                            <div class="tab-pane fade show" id="dados" role="tabpanel" aria-labelledby="dados-tab">

                                <form class="form" action="##" method="post" id="registrationForm">
                                    <div class="row mt-3">
                                        <input name="pessoaTipo" id="edIDPessoaTipo" value="<?php echo $pessoa['IDPessoaTipo'];?>" hidden>
                                        <div class="form-group col-6">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control PF" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $pessoa['nome'];?>" readonly>  
                                                <label for="first_name">Nome</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $pessoa['nomeFantasia'];?>" readonly>  
                                                <label for="first_name">Sobrenome</label> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="form-group col-3">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $endereco['cep'];?>" readonly>  
                                                <label for="first_name">Cep</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $endereco['endereco'];?>" readonly>  
                                                <label for="first_name">Endereço</label> 
                                            </div>
                                        </div>

                                        <div class="form-group col-3">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $endereco['numero'];?>" readonly>  
                                                <label for="first_name">Numero</label> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="form-group col-4">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $endereco['complemento'];?>" readonly>  
                                                <label for="first_name" >Complemento</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-4">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $endereco['cidade'];?>" readonly>  
                                                <label for="first_name" >Cidade</label> 
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $endereco['uf'];?>" readonly>  
                                                <label for="first_name" >Estado</label> 
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="row mt-3">
                                        <div class="form-group col-3">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."  value="<?php echo $contato['telRes'];?>" readonly>  
                                                <label for="first_name" >Telefone</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-3">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $contato['telCel'];?>" readonly>  
                                                <label for="first_name" >Celular</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-2">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $contato['operadora'];?>" readonly>  
                                                <label for="first_name" >Operadora</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-3 campoPF">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $dadosPF['cpf'];?>" readonly>  
                                                <label for="first_name">CPF</label> 
                                            </div>
                                        </div>
                                         <div class="form-group col-3 campoPF">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $dadosPF['rg'];?>" readonly>  
                                                <label for="first_name">RG</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="form-label-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."value="<?php echo $contato['email'];?>" readonly> 
                                                <label for="first_name" >Email</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-4 campoPJ">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $dadosPJ['cnpj'];?>" readonly>  
                                                <label for="first_name">CNPJ</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-4 campoPJ">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $dadosPJ['inscricaoEstadual'];?>" readonly>  
                                                <label for="first_name">Inscricao Estadual</label> 
                                            </div>
                                        </div>
                                        <div class="form-group col-4 campoPJ">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $dadosPJ['InscricaoMunicial'];?>" readonly>  
                                                <label for="first_name">Inscricao Municipal</label> 
                                            </div>
                                        </div>
                                         <div class="form-group col-4 campoPJ">
                                            <div class="form-label-group">
                                                <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo date('d/m/Y', strtotime ($dadosPJ['dataAbertura']));?>" readonly>  
                                                <label for="first_name">Data Abertura</label> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        
                                      </div>
                                    <div class="form-group">
                                        <label for="comment">Observações:</label>
                                        <textarea class="form-control" rows="5" id="comment" readonly></textarea>
                                    </div>
                                    
                                </form>
                            </div>


                            <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="pedidos-tab"> 
                                <table class="data table table-striped no-margin">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Name</th>
                                            <th>Client Company</th>
                                            <th class="hidden-phone">Hours Spent</th>
                                            <th>Contribution</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>New Company Takeover Review</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">18</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>New Partner Contracts Consultanci</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">13</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Partners and Inverstors report</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">30</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Company Takeover Review</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">28</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- end user projects -->
                            </div>

                            <div class="tab-pane fade" id="produtos" role="tabpanel" aria-labelledby="produtos-tab">                           <table class="data table table-striped no-margin">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Client Company</th>
                                        <th class="hidden-phone">Hours Spent</th>
                                        <th>Contribution</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>New Company Takeover Review</td>
                                        <td>Deveint Inc</td>
                                        <td class="hidden-phone">18</td>
                                        <td class="vertical-align-mid">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>New Partner Contracts Consultanci</td>
                                        <td>Deveint Inc</td>
                                        <td class="hidden-phone">13</td>
                                        <td class="vertical-align-mid">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Partners and Inverstors report</td>
                                        <td>Deveint Inc</td>
                                        <td class="hidden-phone">30</td>
                                        <td class="vertical-align-mid">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>New Company Takeover Review</td>
                                        <td>Deveint Inc</td>
                                        <td class="hidden-phone">28</td>
                                        <td class="vertical-align-mid">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>

                            </div>


                            <div class="tab-pane fade" id="resumo" role="tabpanel" aria-labelledby="resumo-tab">

                                <div class="container">
                                    <div class="row">

                                        <div class="card-body  col-md-6" align="center">

                                            <h6>Boletos</h6>

                                            <table class="data table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Numero</th>
                                                        <th>Data Vencimento</th>
                                                        <th>Valor</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>22/05/2018  </td>
                                                        <td>R$ 500,00</td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>22/05/2018  </td>
                                                        <td>R$ 500,00</td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>22/05/2018  </td>
                                                        <td>R$ 500,00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>22/05/2018  </td>
                                                        <td>R$ 500,00</td>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>


                                        <div class="card-body col-md-6" align="center" >

                                            <h6>Cheque</h6>

                                            <table class="data table table-responsive">
                                                <thead>
                                                    <tr>
                                                         <th>Numero</th>
                                                        <th>Data Vencimento</th>
                                                        <th>Valor</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>22/05/2018</td>
                                                        <td>R$ 800,00</td>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>22/05/2018</td>
                                                        <td>R$ 800,00</td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>22/05/2018</td>
                                                        <td>R$ 800,00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>22/05/2018</td>
                                                        <td>R$ 800,00</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>


                                    </div>


                                </div>

                            </div>
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->