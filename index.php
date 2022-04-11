<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="./style/img/rayo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estupidordle</title>
        <link rel="stylesheet" href="./style/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />    
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="text-center" id="header-logo-EN">
                    <img src="./style/img/rayo.png" alt="" id="logoEN">
                </div>
            </div>

            <div class="row">
                <div class="header-estupidordle">                    
                    <h1 class="text-center">
                        <img src="./style/img/hoy_el_tema_es.jpg" class="pull-left" alt="" id="logoHETE">
                        Estupidordle
                        <img src="./style/img/nivel_cero.jpg" class="pull-left" alt="" id="logoN0">
                    </h1>
                    <p class="text-center">El juego que empezaba a pasar de moda, ahora de los nerds(?)</p>
                </div>                
            </div>
        </div>

        <div class="container">            
            <div class="row"></div>

            <div class="row" style="padding-bottom: 95px;">
                <div class="col col-md-4 col-sm-1 col-xs-1"></div>

                <div class="col col-md-4 col-sm-10 col-xs-10">

                    <div class="intento">
                        <div class="ayudas">
                            <table style="width: 100%; padding">
                                <tr class="table-primary text-center" id="intento1">
                                    
                                </tr>
                            </table>
                        </div>
                        <input type="text" class="form-control" id="txtInput1" placeholder="" disabled>
                    </div>
                    
                    <div class="intento">
                        <div class="ayudas">
                            <table style="width: 100%; padding">
                                <tr class="table-primary text-center" id="intento2">
                                    
                                </tr>
                            </table>
                        </div>
                        <input type="text" class="form-control" id="txtInput2" placeholder="" disabled>
                    </div>

                    <div class="intento">
                        <div class="ayudas">
                            <table style="width: 100%; padding">
                                <tr class="table-primary text-center" id="intento3">
                                    
                                </tr>
                            </table>
                        </div>
                        <input type="text" class="form-control" id="txtInput3" placeholder="" disabled>
                    </div>

                    <div class="intento">
                      <div class="ayudas">
                            <table style="width: 100%; padding">
                                <tr class="table-primary text-center" id="intento4">
                                    
                                </tr>
                            </table>
                        </div>
                        <input type="text" class="form-control" id="txtInput4" placeholder="" disabled>
                    </div>

                    <div class="intento">
                        <div class="ayudas">
                            <table style="width: 100%; padding">
                                <tr class="table-primary text-center" id="intento5">
                                    
                                </tr>
                            </table>
                        </div>
                        <input type="text" class="form-control" id="txtInput5" placeholder="" disabled>
                    </div>

                    <div class="intento">
                        <div class="ayudas">
                            <table style="width: 100%; padding">
                                <tr class="table-primary text-center" id="intento6">
                                    
                                </tr>
                            </table>
                        </div>
                        <input type="text" class="form-control" id="txtInput6" placeholder="" disabled>
                    </div>

                    <div class="intento">
                        <select id="game-options" style="width: 100%;">
                        
                        </select>
                    </div>

                    <div class="intento">
                        <button type="button" id="validar" class="btn btn-info btn-block">Validar</button>
                    </div>

                </div>  

                <div class="col col-md-4 col-sm-1 col-xs-1"></div>
            </div>

            <div class="row"></div>
            
        </div>

        <footer class="bg-light text-center text-lg-start">        
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                by: <a class="text-dark" href="http://twitter.com/alexanderch95" target="_blank">delphos</a>
                con amorsh para <a class="text-dark" href="http://twitter.com/estupido_nerd" target="_blank">Estúpido Nerd</a>
            
            </div>
        </footer>

        <div class="modal fade" id="win" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">🎉🎉🎉 Lo has conseguido 🎉🎉🎉</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <H3>🎉🎉🎉 Yeyyyyyyyyyyy lo has conseguido, vuelve mañana a intentar un episodio más...🎉🎉🎉</H3>
                        <div id="dataJugadas">
                            <h5 class="text-center"><b>Jugadas:</b> <span id="jugadas"></span> </h5>
                            <h5 class="text-center"><b>Victorias:</b> <span id="victorias"></span> </h5>
                            <p class="text-center" id="capDia"></p>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="lose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">😓😓😓 Auch, has fallado... 😓😓😓</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <H3>😓😓😓 Auch, has fallado, pero vuelve mañana a seguir intentando... 😓😓😓</H3>
                        <div id="dataJugadas">
                            <h5 class="text-center"><b>Jugadas:</b> <span id="jugadasLose"></span> </h5>
                            <h5 class="text-center"><b>Victorias:</b> <span id="victoriasLose"></span> </h5>
                            <p class="text-center" id="capDiaLose"></p>  
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Info importante.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <H3>Reglas e información importante</H3>
                        <p>Aquí tiene un juego en fase beta donde adivinaras el capitulo diario de los podcasts asociados a Estúpido Nerd, para ello, tendrás 6 intentos, donde por cada intento se validarán diferentes propiedades del capítulo, estás propiedades son: <br>
                            <b>Programa:</b> Estúpido Nerd – Nivel Cero – Hoy el tema es… <br>
                            <b>Temporada:</b> 1, 2, 3, 4… <br>
                            <b>Tema:</b> Series, Películas, Videojuegos, Otras cosas ñoñas y anime. <br>
                            <b>Participantes del podcast:</b> Juandapo, Diego y Boris – Juandapo y Diego, – Juandapo y Boris – Diego y Boris – Solo Diego – Solo Boris – Juandapo, Diego, Boris y/o invitados (pueden o no estar los nerds). <br>

                            Es importante recalcar que solo hay capítulos canon de los podcasts, lo que significa que no hay capítulos de DLC, extras, cuarentena nerd o estúpido vs nerd. <br>
                            
                            NOTA: para los episodios de Nivel Cero y HETE, al no tener temporadas, se dividieron en paquetes de 10 donde cada 10 capítulos es una temporada, por ejemplo, el capítulo 2 de HETE (El fallecimiento de la Reina Isabel), corresponde a la temporada 1 y el capitulo 44 (El impuesto a las ventanas) pertenece a la temporada 5, de igual manera para nivel cero.<br>

                            Diviértete y recuerda es beta, así que puede haber fallos. 🙈
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-reglas" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        $(document).ready(function(){
            loadGame();
            loadBoard();

            $('#reglas').modal('show');

            $.ajax({
                url:"/estupidordle/api/capitulo.php",
                method:"GET",
                data:{},
                dataType:"JSON",
                success:function(data){
                    var info = data.msg;
                    var html = "";

                    for(var i = 0; i < info.length; i++){
                        $('#game-options').append("<option style='background-color: red; color: black;' value='" + info[i][0] + "'>" + info[i][0] + "</option>");                    
                    }               
                    
                    $('#game-options').select2();           
                },
                error:function(data){
                    console.log(data);
                }
            });

            $('#btn-reglas').click(function() {
                $('#reglas').modal('hide');
            });


            $('#validar').click(function() {
                var capSel       = $('#game-options').val();
                $.ajax({
                    url:"/estupidordle/api/capitulo.php",
                    method:"POST",
                    data:JSON.stringify({"cap":capSel}),
                    dataType:"JSON",
                    success:function(data){
                        updateTryGame(capSel);
                        var info = data.msg;
                        var html = "";
                        var opOK = "<td class='table-primary' style='width: 20%' id='ayuda1'><i class='bi bi-bookmark-check-fill' style='color: green; font-size: 25px;'></i></td>";
                        var opFail = "<td class='table-primary' style='width: 20%' id='ayuda1'><i class='bi bi-bookmark-x-fill' style='color: red; font-size: 25px;'></i></td>";                       
                        var opWin = "<td class='table-primary' style='width: 20%' id='ayuda1'>🎉</td>";
                        var opLose = "<td class='table-primary' style='width: 20%' id='ayuda1'>😭</td>";
                        if(info[0] === 'OK'){
                            getUpdateWin();
                            $('#validar').prop('disabled', true);
                            $('#jugadas').html(getJugadas());
                            $('#victorias').html(getVictorias());
                            getCapituloDia();
                            $('#win').modal('show');
                            for(let i = 1; i < info.length; i++){
                                if(info[i] === 'OK'){
                                    html += opOK;
                                } else {
                                    html += opFail;
                                }
                            }
                            html += opWin;
                        } else {
                            for(let i = 1; i < info.length; i++){
                                if(info[i] === 'OK'){
                                    html += opOK;
                                } else {
                                    html += opFail;
                                }
                            }
                            html += opLose;
                        }

                        let intento = getTry();

                        if(intento >= 6) {
                            $('#validar').prop('disabled', true);
                            getUpdateLose();
                            $('#jugadasLose').html(getJugadas());
                            $('#victoriasLose').html(getVictorias());
                            getCapituloDia();
                            $('#lose').modal('show');
                        } 
                        let txt = getTxtIntento(intento);
                        let tbl = getIntento(intento);

                        $(tbl).html(html);
                        $(txt).val(capSel);             
                    },
                    error:function(data){
                        console.log(data);
                    }
                });
            });

        });

        function saveGame(){
            
        }

        function loadGame() {
            if(localStorage.getItem("stupidordle")){
                console.log("dataExistente");
            } else{
                let fechaActual = new Date();
                fechaActual.setHours(0,0,0,0);
                let probados = ["","","","","",""];
                let gameInfo = {
                    conoceReglas: "false",
                    intentos: 0,
                    victorias: 0,
                    jugados: 0,
                    test: probados,
                    ultimajugada: fechaActual
                };

                localStorage.setItem("stupidordle", JSON.stringify(gameInfo));
            }
        }

        function loadBoard(){
            let dataGame = JSON.parse(localStorage.getItem("stupidordle"));
            let jugadas = dataGame.test; 
            let size = dataGame.intentos;
            let fechaActual = new Date();
            fechaActual.setHours(0,0,0,0);

            if(dataGame.intentos >= 6){
                $('#validar').prop('disabled', true);
            }

            let ultimaJugada = new Date(dataGame.ultimajugada);
            ultimaJugada.setHours(0,0,0,0);
            console.log(ultimaJugada);
            console.log(fechaActual);

            if(fechaActual > ultimaJugada){
                let probados = ["","","","","",""];
                dataGame.intentos = 0;
                dataGame.test = probados;
                dataGame.ultimajugada = fechaActual;
                localStorage.setItem("stupidordle", JSON.stringify(dataGame));
            } else {
                for(let i = 0; i < size; i++)          {
                    if(jugadas[i] !== ""){
                        let txt = getTxtIntento(i+1);
                        $(txt).val(jugadas[i]);
                        validarPasadas(jugadas[i], i+1);
                    }
                }                    
            }            
        }

        function validarPasadas(valor, intento){
            var capSel       = valor;
            $.ajax({
                url:"/estupidordle/api/capitulo.php",
                method:"POST",
                data:JSON.stringify({"cap":capSel}),
                dataType:"JSON",
                success:function(data){

                    var info = data.msg;
                    var html = "";
                    var opOK = "<td class='table-primary' style='width: 20%' id='ayuda1'><i class='bi bi-bookmark-check-fill' style='color: green; font-size: 25px;'></i></td>";
                    var opFail = "<td class='table-primary' style='width: 20%' id='ayuda1'><i class='bi bi-bookmark-x-fill' style='color: red; font-size: 25px;'></i></td>";
                    var opWin = "<td class='table-primary' style='width: 20%' id='ayuda1'>🎉</td>";
                    var opLose = "<td class='table-primary' style='width: 20%' id='ayuda1'>😭</td>";
                    console.log(data);                        

                    if(info[0] === 'OK'){
                            $('#jugadas').html(getJugadas());
                            $('#victorias').html(getVictorias());
                            getCapituloDia();
                            $('#validar').prop('disabled', true);
                            $('#win').modal('show');
                            for(let i = 1; i < info.length; i++){
                                if(info[i] === 'OK'){
                                    html += opOK;
                                } else {
                                    html += opFail;
                                }
                            }
                            html += opWin;
                        } else {
                            for(let i = 1; i < info.length; i++){
                                if(info[i] === 'OK'){
                                    html += opOK;
                                } else {
                                    html += opFail;
                                }
                            }
                            html += opLose;
                        }

                    var tabla = getIntento(intento);

                    if(intento >= 6) {
                        $('#jugadasLose').html(getJugadas());
                        $('#victoriasLose').html(getVictorias());
                        getCapituloDia();
                        $('#lose').modal('show');
                    } 

                    let txt = getTxtIntento(intento);
                    let tbl = getIntento(intento);

                    $(tbl).html(html);
                    $(txt).val(capSel);
                                            
                },
                error:function(data){
                    console.log(data);
                }
            });
        }

        function getTxtIntento(intento) {
            if(intento === 1){
                return '#txtInput1';
            } else if(intento === 2){
                return '#txtInput2';
            } else if(intento === 3){
                return '#txtInput3';
            } else if(intento === 4){
                return '#txtInput4';
            } else if(intento === 5){
                return '#txtInput5';
            } else if(intento === 6){
                return '#txtInput6';
            } 
        }

        function getIntento(intento) {
            if(intento === 1){
                return '#intento1';
            } else if(intento === 2){
                return '#intento2';
            } else if(intento === 3){
                return '#intento3';
            } else if(intento === 4){
                return '#intento4';
            } else if(intento === 5){
                return '#intento5';
            } else if(intento === 6){
                return '#intento6';
            } 
        }

        function updateTryGame(valor) {
            let dataGame = JSON.parse(localStorage.getItem("stupidordle"));
            let probados = dataGame.test;
            let intento  = dataGame.intentos;

            probados[intento] = valor;
            intento += 1;
            
            dataGame.intentos = intento;
            dataGame.test = probados;

            localStorage.setItem("stupidordle", JSON.stringify(dataGame));                
        }

        function getTry() {
            let dataGame = JSON.parse(localStorage.getItem("stupidordle"));
            return dataGame.intentos;
        }

        function getUpdateWin() {
            let dataGame = JSON.parse(localStorage.getItem("stupidordle"));  
            let jugadas = dataGame.jugados;
            let victorias = dataGame.victorias;

            dataGame.jugados = jugadas + 1;
            dataGame.victorias = victorias + 1;

            localStorage.setItem("stupidordle", JSON.stringify(dataGame));
        }

        function getUpdateLose() {
            let dataGame = JSON.parse(localStorage.getItem("stupidordle"));  
            let jugadas = dataGame.jugados;

            dataGame.jugados = jugadas + 1;

            localStorage.setItem("stupidordle", JSON.stringify(dataGame));
        }
        
        function getJugadas(){
            let dataGame = JSON.parse(localStorage.getItem("stupidordle"));
            return dataGame.jugados;
        }

        function getVictorias(){
            let dataGame = JSON.parse(localStorage.getItem("stupidordle"));
            return dataGame.victorias;
        }

        function getCurrentDate() {
            const t = new Date();
            const date = ('0' + t.getDate()).slice(-2);
            const month = ('0' + (t.getMonth() + 1)).slice(-2);
            const year = t.getFullYear();
            return `${date}/${month}/${year}`;
        }
        
        function getCapituloDia() {
            $.ajax({
                url:"/estupidordle/api/capitulo.php",
                method:"GET",
                data:{id: "x"},
                dataType:"JSON",
                success:function(data){
                    var info = data.msg;
                    var html = "";
                    
                    var capDelDia = info[0][0] + " - " + info[0][1];

                    $('#capDia').html(capDelDia);
                    $('#capDiaLose').html(capDelDia);
                },
                error:function(data){
                    console.log(data);
                }
            });
        }

    </script>
</html>