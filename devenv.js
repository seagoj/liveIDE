var apikey = 'TDUgYS2k309nRW77p8nBTPEpB3WkXp';

$(document).ready(function(){
    txt=$("#codeWindow").val();
    $.post("inc.eval.php",{code:txt,api_key:apikey},function(result){
        $("#viewWindow").html(result);
    });

    $("#file").change(function() {
        // Post to php page to retrive contents of #file
    });
});


function render(editor, event) {
    if(event.type == "keyup") {
        txt=editor.getValue();
        $.post("inc.eval.php",{code:txt,api_key:apikey},function(result){
            $("#viewWindow").html(result);
        });
    }
}