<?php
    // Inclui pagina header 
    include 'bootstrap/header.php';

    if (isset($_GET['lE'])){
?>
    <script>
        $(document).ready(function(){
            $(".lserroToast").toast('show');
        });
    </script>
<?php
    }
?>

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

    <div class="toast align-items-center text-bg-danger border-0 divToast lserroToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <b>Senha ou usuário incorretos!</b>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

    <div class="toast align-items-center text-bg-warning border-0 divToast campovToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <b>Preencha todos os campos</b>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 70px; margin-bottom: 150px;">
    <div class="row">
        <div class="col"></div>

        <div class="col-lg-4" style="width: 350px; height: auto;">

            <div class="row" style="margin-top: 10px;">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-fill">
    
                        <li class="nav-item" id="login">
                            <button class="nav-link btnlogin" id="itemlogin" aria-current="page">Login</button>
                        </li>
    
                        <li class="nav-item" id="cadastro">
                            <button class="nav-link btncadastro" id="itemcadastro" aria-current="page">Cadastro</button>
                        </li>
                    </ul>
                </div>
                <hr>
            </div>

            

            <div class="arealogin">
                <h2 style="text-align:center; margin-top: 5px;">Login</h2>

                <form action="verificar.php<?php if(isset($_GET['lp'])){echo '?lp';}else{echo '';}?>" id="formLogin" method="post" style="margin-top:20px;"> 
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="selecao">
                        <label class="form-check-label" for="selecao">Exibir senha</label>
                    </div>

                    <div class="d-grid gap-2" style="margin-top: 30px; margin-bottom: 20px;">
                        <button type="button" class="btn btn-primary" id="btnEntrar">Entrar</button>
                    </div>
                </form>
            </div>
            

            
            <div class="areacadastro">
                <h2 style="text-align:center; margin-top: 5px;">Cadastro</h2>

                <form action="cadastrar.php" id="frmCadastro" method="post" style="margin-top:20px;">
                    <div class="mb-3">
                        <label for="nomeCad" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nomeCad" name="nomeCad">
                    </div>

                    <div class="mb-3">
                        <label for="usuarioCad" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuarioCad" name="usuarioCad">
                    </div>

                    <div class="mb-3">
                        <label for="emailCad" class="form-label">Email</label>
                        <input type="text" class="form-control" id="emailCad" name="emailCad">
                    </div>

                    <div class="mb-3">
                        <label for="telefoneCad" class="form-label">Telefone</label>
                        <input type="number" class="form-control" id="telefoneCad" name="telefoneCad">
                    </div>

                    <div class="mb-3">
                        <label for="senhaCad" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senhaCad" name="senhaCad">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="selecao2">
                        <label class="form-check-label" for="selecao2">Exibir senha</label>
                    </div>

                    <div class="d-grid gap-2" style="margin-top: 30px; margin-bottom: 20px;">
                        <button type="button" class="btn btn-primary" id="btnCadastrar">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<script src="script/script.js"></script>

<script>

    $(document).ready(function(){
        var inicio = "<?php if(isset($_GET['t'])){echo $_GET['t'];}else{echo "";}?>";
        var erroinicio = "<?php if(isset($_GET['lE'])) {echo 'lE';}else{ echo ' ';}?>";

        if (inicio === "l" || inicio === "lp" || erroinicio === "lE")
        {
            if($('#login').ready(function(){
                $(".areacadastro").hide();
                $(".arealogin").show();

                $("#itemlogin").addClass('active');
                $("#itemcadastro").removeClass('active');

                $("#itemlogin").css("font-weight", "bold");
                $("#itemcadastro").css("font-weight", "400");

                $("#itemcadastro").css("color", "black");
            }));
        }

        else if(inicio === "c")
        {
            if($('#cadastro').ready(function(){
                $(".arealogin").hide();
                $(".areacadastro").show();

                $("#itemcadastro").addClass('active');
                $("#itemlogin").removeClass('active');

                $("#itemcadastro").css("font-weight", "bold");
                $("#itemlogin").css("font-weight", "400");
                
                $("#itemlogin").css("color", "black");
            }));
            
        }

        $('#btnEntrar').click(function(){
            if(document.getElementById("usuario").value === "" || document.getElementById("senha").value === ""){
                $(".campovToast").toast('show');
            }
            else
            {
                $("#formLogin").submit();
            }
        });
    
        $('#btnCadastrar').click(function(){
            if(document.getElementById("nomeCad").value === "" || document.getElementById("usuarioCad").value === "" || document.getElementById("emailCad").value === "" || document.getElementById("telefoneCad").value === "" || document.getElementById("senhaCad").value === ""){
                $(".campovToast").toast('show');
            }
            else
            {
                $("#frmCadastro").submit();
            }
        });

    });

</script>

<?php
    // Inclui pagina footer
    include 'bootstrap/footer.php';
?>