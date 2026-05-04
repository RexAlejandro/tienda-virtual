const tableLista = document.querySelector('#tableListaProductos tbody');
const tblPendientes = document.querySelector('#tblPendientes');
document.addEventListener('DOMContentLoaded', function ()
{
    if(tableLista)
    {
        getListaProductos();
    } 
    //CARGAR DATOS PENDIENTES con Data Tables
    $('#tblPendientes').DataTable({
        ajax: {
            url: base_url + 'clientes/listarPendientes',
            dataSrc: ''
        },
        columns:[
            { data: 'id_transaccion' },
            { data: 'monto' },
            { data: 'fecha' }
        ],
        language,
        dom,
        buttons
    });

    //SCRIPT PAYPAL
    function initPayPalButton() {
        
    }
    //initPayPalButton();
});
function getListaProductos()
{
    let html = '';
    //AJAX
    const url = base_url + 'principal/listaProductos';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify(listaCarrito));
    http.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            const res = JSON.parse(this.responseText);
            if(res.totalPayPal > 0)
            {
                res.productos.forEach(producto => {
                    html += 
                    `
                    <tr>
                        <td>
                        <img class="img-thumbnail rounded-circle" src="${producto.imagen}" alt="" width="75">
                        </td>
                        <td>${producto.nombre}</td>
                        <td>
                            <span class="badge bg-info">
                                ${res.moneda + ' ' + producto.precio}
                            </span>
                        </td>
                        <td>${producto.cantidad}</td>
                        <td>
                            ${producto.subTotal}
                        </td>
                    </tr>
                    `
                });
                tableLista.innerHTML = html;
                document.querySelector('#totalProducto').textContent = 'TOTAL A PAGAR:' + res.moneda + ' ' + res.total;
                botonPayPal(res.totalPayPal);
            }
            else
            {
                tableLista.innerHTML = `
                    <tr>
                        <td colspan="5" class=text-center>CARRITO VACIO</td>
                    </tr> 
                `;
            }
        }
    }
}

function botonPayPal(total)
{
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'pay',

        },

        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    "description": "LA DESCRIPCION DE TU PRODUCTO",
                    "amount": {
                        "currency_code": "MXN",
                        "value": total
                    }
                }]
            });
        },

        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                registrarPedido(orderData)
            });
        },

        /*onError: function(err) {
            console.log(err);
        }*/
    }).render('#paypal-button-container');
}

function registrarPedido(datos)
{
    const url = base_url + 'Clientes/registrarPedido';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify({
        pedidos: datos,
        productos: listaCarrito
    }));
    http.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            Swal.fire
                (
                    'ALERTA',
                    res.msg,
                    res.icono
                );
            if(res.icono == 'success')
            {
                localStorage.removeItem('listaCarrito');
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            }
        }
    }
}


//CORREO DE PRUEBA PAYPAL: sb-urgnk28110696@personal.example.com
//CONTRASEÑA: 6<9=GvDq