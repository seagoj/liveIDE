$(document).ready(function(){
    $("#code").keyup(function(){
        alert("called");
        txt=$("#code").val();
        $.post("inc.eval.php",{code:txt},function(result){
            $("#view").html(result);
        });
        //$("#viewWindow").html($("#codeWindow").val());
    });
});


