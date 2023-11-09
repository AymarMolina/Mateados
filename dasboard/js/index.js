function index(){
    this.ini=function(){
        console.log("iniciandos...");
        this.getIndicadores();
        this.getDatosGraficas();
    }
    this.getIndicadores=function(){

        //vendidos
        $.ajax({
            statusCode:{
                404:function(){
                    console.log("Esta pagina no existe");
                }
            },
            url:'php/servidor.php',
            method:'POST',
            data:{
                rq:"1"
            }
         }).done(function(datos){
                //lA LOGICA de las respuestas
                $("#idRegistros").text(parseFloat(datos).toLocaleString());
            });
        //almacen
        $.ajax({
            statusCode:{
                404:function(){
                    console.log("Esta pagina no existe");
                }
            },
            url:'php/servidor.php',
            method:'POST',
            data:{
                rq:"2"
            }
         }).done(function(datos){
                //lA LOGICA de las respuestas
                $("#idEdades").text(parseFloat(datos).toLocaleString());
            });
        //Ingresos
        $.ajax({
            statusCode:{
                404:function(){
                    console.log("Esta pagina no existe");
                }
            },
            url:'php/servidor.php',
            method:'POST',
            data:{
                rq:"3"
            }
         }).done(function(datos){
                //lA LOGICA de las respuestas
                $("#idComentarios").text(parseFloat(datos).toLocaleString());
            });
    }
    this.getDatosGraficas=function(){
        $.ajax({
            statusCode:{
                404:function(){
                    console.log("Esta pagina no existe");
                }
            },
            url:'php/servidor.php',
            method:'POST',
            data:{
                rq:"4"
            }
         }).done(function(datos){
            if(datos!=''){
                let etiquetas=new Array();
                let tRegistros=new Array();
                let tEdades=new Array();
                let coloresR=new Array();
                let coloresE=new Array();
                var jDatos=JSON.parse(datos);

                /*var tablaDatos=document.createElement('tabla');
                tablaDatos.classList.add('table','table-striped');
                var tr=document.createElement('tr');
                var th=document.createElement('th');
                th.innerText="Fecha";
                tr.appendChild  (th);
                th=document.createElement('th');
                th.innerText="Ventas";
                tr.appendChild  (th);
                th=document.createElement('th');
                th.innerText="Precio";
                tr.appendChild  (th);
                tablaDatos.appendChild(tr);*/

                
                
                for(let i in jDatos){
                    etiquetas.push(jDatos[i].fechaRegistro);
                    tRegistros.push(jDatos[i].totalRegistros);
                    tEdades.push(jDatos[i].totalEdades);
                    coloresR.push("#90ee90");
                    coloresE.push("#ffa420");
                }
                /*var idCont=document.getElementById("idContTabla");
                idCont.appendChild (tablaDatos);*/

                var ctx = document.getElementById('idGrafica').getContext('2d');
                var mychart=new Chart(ctx, {
                    type: 'bar',
                    data: {
                      labels: etiquetas,
                      datasets: [
                            {
                                label: 'Usuarios',
                                data: tRegistros,
                                backgroundColor:coloresR
                            },
                            {
                                label: 'Edad prom',
                                data: tEdades,
                                backgroundColor:coloresE
                            }
                        ]
                    }
                })
            }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                console.log("Error en la solicitud AJAX: " + textStatus, errorThrown);
            });;
    }
}
var oindex=new index();
setTimeout(function(){oindex.ini();},100);