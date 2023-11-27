function index(){
    this.ini=function(){
        console.log("iniciandos...");
        this.getIndicadores();
        this.getDatosGraficas();
        this.getDatosGraficasGenero();
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
                $("#idRegistros").text(parseInt(datos).toLocaleString());
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
                $("#idEdades").text(parseInt(datos).toLocaleString());
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

        $.ajax({
                statusCode:{
                    404:function(){
                        console.log("Esta pagina no existe");
                    }
                },
                url:'php/servidor.php',
                method:'POST',
                data:{
                    rq:"5"
                }
             }).done(function(datos){
                    //lA LOGICA de las respuestas
                    $("#idMasculino").text(parseInt(datos).toLocaleString());
                });
        $.ajax({
            statusCode:{
                404:function(){
                    console.log("Esta pagina no existe");
                }
            },
            url:'php/servidor.php',
            method:'POST',
            data:{
                rq:"6"
            }
         }).done(function(datos){
                //lA LOGICA de las respuestas
                $("#idFemenino").text(parseInt(datos).toLocaleString());
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

                
                for(let i in jDatos){
                    etiquetas.push(jDatos[i].fechaRegistro);
                    tRegistros.push(jDatos[i].totalRegistros);
                    tEdades.push(jDatos[i].totalEdades);
                    coloresR.push("#90ee90");
                    coloresE.push("#ffa420");
                }

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
    this.getDatosGraficasGenero=function(){
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
            
                var num1=document.getElementById('idMasculino').textContent;
                var numEn=parseInt(num1);
                var num2=document.getElementById('idFemenino').textContent;
                var numEn2=parseInt(num2);

                var ctx = document.getElementById('idGraficaGenero').getContext('2d');
                var mychart=new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                      labels:['Masculino','Femenino'],
                      datasets:[{
                        data:[numEn,numEn2],
                        backgroundColor:[
                            'rgb(54, 162, 235)',
                            'rgb(255, 99, 132)'
                        ],
                        hoverOffset:4
                      }]
                    }
                })
            
            }).fail(function (jqXHR, textStatus, errorThrown) {
                console.log("Error en la solicitud AJAX: " + textStatus, errorThrown);
            });;
    }
}
var oindex=new index();
setTimeout(function(){oindex.ini();},100);