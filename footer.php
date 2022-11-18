    <script>
        $(".areacadastro").hide();
        $("#itemlogin").addClass('active');
        $("#itemlogin").css("font-weight", "bold")
        $("#itemcadastro").css("color", "black");


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