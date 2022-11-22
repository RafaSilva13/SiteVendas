<?php
    // Inclui pagina header 
    include 'bootstrap/header.php';
?>

<div class="container" style="margin-top: 70px;">
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
                        <input type="checkbox" class="form-check-input" id="selecao">
                        <label class="form-check-label" for="selecao">Exibir senha</label>
                    </div>

                    <div class="d-grid gap-2" style="margin-top: 30px; margin-bottom: 20px;">
                        <button type="submit" class="btn btn-primary" id="btnEntrar">Entrar</button>
                    </div>
                </form>
            </div>
            

            
            <div class="areacadastro">
                <h2 style="text-align:center; margin-top: 5px;">Cadastro</h2>

                <form style="margin-top:20px;">
                    <div class="mb-3">
                        <label for="nomeCad" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nomeCad">
                    </div>

                    <div class="mb-3">
                        <label for="usuarioCad" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuarioCad">
                    </div>

                    <div class="mb-3">
                        <label for="emailCad" class="form-label">Email</label>
                        <input type="text" class="form-control" id="emailCad">
                    </div>

                    <div class="mb-3">
                        <label for="telefoneCad" class="form-label">Telefone</label>
                        <input type="number" class="form-control" id="telefoneCad">
                    </div>

                    <div class="mb-3">
                        <label for="senhaCad" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senhaCad">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="selecao2">
                        <label class="form-check-label" for="selecao2">Exibir senha</label>
                    </div>

                    <div class="d-grid gap-2" style="margin-top: 30px; margin-bottom: 20px;">
                        <button type="submit" class="btn btn-primary" id="btnCadastro">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<script src="script/script.js"></script>

<script>

    var inicio = "<?php echo $_GET['t']?>";

    if (inicio === "l")
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

    $(document).ready(function(){

        $("#btnEntrar").addClass('disabled');
        $("#btnCadastro").addClass('disabled');

        $("input").blur(function(){
            if(document.getElementById("usuario").value != "" && document.getElementById("senha").value != ""){
                $("#btnEntrar").removeClass('disabled');
            }
        });
        
        $("input").blur(function(){
            if(document.getElementById("nomeCad").value != "" && document.getElementById("usuarioCad").value != "" && document.getElementById("emailCad").value != "" && document.getElementById("telefoneCad").value != "" && document.getElementById("senhaCad").value != ""){
                $("#btnCadastro").removeClass('disabled');
            }
        });
    });

</script>

<?php
    // Inclui pagina footer
    include 'bootstrap/footer.php';
?>