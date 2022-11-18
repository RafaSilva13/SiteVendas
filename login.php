<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col"></div>

            <div class="col-lg-4" style="width: 350px; height: auto;">

                <div class="row" style="margin-top: 10px;">
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
                            <button type="submit" class="btn btn-secondary">Entrar</button>
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
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Exibir senha</label>
                        </div>

                        <div class="d-grid gap-2" style="margin-top: 30px; margin-bottom: 20px;">
                            <button type="submit" class="btn btn-secondary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script>
        $(".areacadastro").hide();
        $("#itemlogin").addClass('active');
        $("#itemlogin").css("font-weight", "bold")
        $("#itemcadastro").css("color", "black");

        if(document.acess.inp.value == null) {
            console.log("Olá");
        }


        $(function () {
            $("#login").click(function(){
                $(".areacadastro").hide();
                $(".arealogin").show();

                $("#itemlogin").addClass('active');
                $("#itemcadastro").removeClass('active');

                $("#itemlogin").css("font-weight", "bold");
                $("#itemcadastro").css("font-weight", "400");

                $("#itemcadastro").css("color", "black");
            })
            $("#cadastro").click(function(){
                $(".arealogin").hide();
                $(".areacadastro").show();

                $("#itemcadastro").addClass('active');
                $("#itemlogin").removeClass('active');

                $("#itemcadastro").css("font-weight", "bold");
                $("#itemlogin").css("font-weight", "400");
                
                $("#itemlogin").css("color", "black");
            })
               
            $('#exampleCheck1').click(function(){

                var checkbox = $('#exampleCheck1');

                if(checkbox.is(":checked")) {
                    $('#senha').attr('type', 'text');
                } else {
                    $('#senha').attr('type', 'password');
                }

            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>