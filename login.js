
function connexion(mdp){
    $.ajax({
    url : 'http://80.11.12.120:8080/employee/uuid/22035-5',
    type : 'GET',  
    dataType : 'application/json',
    success : function(reponse){
        console.log(reponse)},
        });
    }

$('#connexion').click( function(){
    console.log("test");
    var mdp = document.getElementById("mdp").value;
    connexion(mdp);
});
