const btnRegister = document.querySelector('#btnRegister');
const btnLogin = document.querySelector('#btnLogin');
const frmLogin = document.querySelector('#frmLogin');
const frmRegister = document.querySelector('#frmRegister');
const registrarse = document.querySelector('#registrarse');
const login = document.querySelector('#login');

const nombreRegistro = document.querySelector('#nombreRegistro');
const claveRegistro = document.querySelector('#claveRegistro');
const correoRegistro = document.querySelector('#correoRegistro');

const correoLogin = document.querySelector('#correoLogin');
const claveLogin = document.querySelector('#claveLogin');

const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'))

document.addEventListener('DOMContentLoaded', function ()
{
    btnRegister.addEventListener('click', function()
    {
        frmLogin.classList.add('d-none');
        frmRegister.classList.remove('d-none');
    })
    
    btnLogin.addEventListener('click', function()
    {
        frmLogin.classList.remove('d-none');
        frmRegister.classList.add('d-none');
    })
    //REGISTRO
    registrarse.addEventListener('click', function()
    {
        if(nombreRegistro.value == '' || correoRegistro.value == '' || claveRegistro.value == '') 
        {
            Swal.fire("AVISO", 'Favor de llenar todos los campos', 'warning');
        }else
        {
            let formData = new FormData();
            formData.append('nombre', nombreRegistro.value);
            formData.append('clave', claveRegistro.value);
            formData.append('correo', correoRegistro.value);
            //AJAX
            const url = base_url + 'clientes/registroDirecto';
            const http = new XMLHttpRequest();
            http.open('POST', url, true);
            http.send(formData);
            http.onreadystatechange = function()
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    const res = JSON.parse(this.responseText);
                    Swal.fire("AVISO", res.msg, res.icono);
                    if(res.icono == 'success')
                    {
                        setTimeout(() => {
                            enviarCorreo(correoRegistro.value, res.token);
                        }, 2000);
                    }
                }
            }
        }
    });

    //LOGIN DIRECTO
    login.addEventListener('click', function()
    {
        if
        (
            correoLogin.value == '' || 
            claveLogin.value == ''
        ) 
        {
            Swal.fire("AVISO", 'Favor de llenar todos los campos', 'warning');
        }else
        {
            let formData = new FormData();
            formData.append('correoLogin', correoLogin.value);
            formData.append('claveLogin', claveLogin.value);
            //AJAX
            const url = base_url + 'clientes/loginDirecto';
            const http = new XMLHttpRequest();
            http.open('POST', url, true);
            http.send(formData);
            http.onreadystatechange = function()
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    const res = JSON.parse(this.responseText);
                    Swal.fire("AVISO", res.msg, res.icono);
                    if(res.icono == 'success')
                    {
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                }
            }
        }
    });
});

function enviarCorreo(correo, token)
{
    let formData = new FormData();
    formData.append('token', token);
    formData.append('correo', correo);
    const url = base_url + 'clientes/enviarCorreo';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(formData);
    http.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            const res = JSON.parse(this.responseText);
            Swal.fire("AVISO", res.msg, res.icono);
            if(res.icono == 'success')
            {
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            }
        }
    }
}

function abrirModalLogin()
{
    myModal.hide();
    modalLogin.show();
}