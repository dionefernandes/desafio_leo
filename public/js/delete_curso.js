// JavaScript Document

function confirm_deleteCurso(id) {
    var r = confirm("Essa operação não pode ser revertida.\n Você realmete deseja excluir este curso?");
    
    if (r == true) {
        document.location.href = '../deleteConfirm/' + id;
    } else {
        return false;
    }
}