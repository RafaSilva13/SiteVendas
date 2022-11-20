$(".areacadastro").hide();
$("#itemlogin").addClass('active');
$("#itemlogin").css("font-weight", "bold")
$("#itemcadastro").css("color", "black");

$(".btnsair").hide();

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
        
    $('#selecao').click(function(){

        var checkbox = $('#selecao');

        if(checkbox.is(":checked")) {
            $('#senha').attr('type', 'text');
        } else {
            $('#senha').attr('type', 'password');
        }

    });
    
    $('#selecao2').click(function(){

        var checkbox = $('#selecao2');

        if(checkbox.is(":checked")) {
            $('#senhaCad').attr('type', 'text');
        } else {
            $('#senhaCad').attr('type', 'password');
        }

    });
});