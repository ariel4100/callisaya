$(document).ready(function(){
    $('#btnLogin').click(function(){

        var datos = $('#frmLogin').serialize();

        $.ajax({
            method:"POST",
            url:"?c=Usuarios&a=productoLogin",
            data:datos,
            success:function(res){
                if(res == '1')
                {
                    alertify.alert('Error', 'por favor complete todos los campos');
                }else if(res == '2')
                {
                    alertify.alert('Error', 'El usuario o la contraseña son incorrectos');
                }else{
                    window.location.href = res;
                }
            }
        });
        return false;
    });

    $('#btnReg').click(function(){

        var datos = $('#frmReg').serialize();
        
        $.ajax({
            method:"POST",
            url:"?c=Usuarios&a=productoReg",
            data:datos,
            success:function(res){
                if(res == '1')
                {
                    alertify.alert('Error', 'por favor complete todos los campos');
                }else if(res == '2')
                {
                    alertify.alert('Error', 'El correo ya existe ¡por favor coloque otro email');
                }else{
                    window.location.href = res;
                }
            }
        });
        return false;
    });
});