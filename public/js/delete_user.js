// JavaScript Document

function confirm_deleteUser(id) {
    var r = confirm("Essa operação não pode ser revertida.\n Você realmete deseja excluir o usuário?");
    
    if (r == true) {
        document.location.href = '../deleteConfirm/' + id;
    } else {
        return false;
    }
}