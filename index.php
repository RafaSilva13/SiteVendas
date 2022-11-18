<?php
    //include 'connection.php';
    include 'header.php';
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 410px;">
        <div class="modal-content">
            

            <div class="modal-body">

                <div class="container"  style="margin-top: 10px;">
                    <div class="row">
                        <div class="col"></div>

                        <div class="col-lg-4" style="width: 350px; height: auto;">

                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav nav-tabs nav-fill">
                    
                                        <li class="nav-item" id="login">
                                            <a class="nav-link" id="itemlogin" aria-current="page" href="#">Login</a>
                                        </li>
                    
                                        <li class="nav-item" id="cadastro">
                                            <a class="nav-link" id="itemcadastro" aria-current="page" href="#">Cadastro</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                            </div>

                            <div class="arealogin">
                                <h2 style="text-align:center; margin-top: 5px;">Login</h2>

                                <form style="margin-top:20px;"> 
                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="usuario">
                                    </div>
                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Exibir senha</label>
                                    </div>

                                    <div class="d-grid gap-2" style="margin-top: 30px; margin-bottom: 20px;">
                                        <button type="submit" class="btn btn-primary">Entrar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </form>
                            </div>
                        

                            
                            <div class="areacadastro">
                                <h2 style="text-align:center; margin-top: 5px;">Cadastro</h2>

                                <form style="margin-top:20px;">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome">
                                    </div>

                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="usuario">
                                    </div>

                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Exibir senha</label>
                                    </div>

                                    <div class="d-grid gap-2" style="margin-top: 30px; margin-bottom: 20px;">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>