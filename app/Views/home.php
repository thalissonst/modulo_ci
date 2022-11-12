<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Início</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    
</head>
<body>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h4 class="masthead-brand">Módulo</h4> 
            </div>
        </header>
        <br>
        <main role="main" class="inner cover">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Obtenha Informações</h5>
                    <p class="card-text">Obtenha informações sobre o trabalho de cada tipo de pessoa, basta preencher os dois argumentos e clicar em buscar.</p>
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <label for="">Tipo:</label>
                                <select class="form-control" id="type" required>
                                    <option selected disabled>Selecione</option>
                                    <option value="dancer">Dançarino</option>
                                    <option value="developer">Desenvolvedor</option>
                                    <option value="player">Jogador</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Período:</label>
                                <select class="form-control" id="period" required>
                                    <option selected disabled>Selecione</option>
                                    <option value="day">Dia</option>
                                    <option value="night">Noite</option>
                                </select>
                            </div>
                        </div><br>
                        <button type="button" onclick="search()" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultado:</h5>
                    <textarea class="form-control" id="textarea" rows="3" style="resize: none" disabled></textarea>
                </div>
            </div>
        </main>
        <p><small>© Thalisson Aquino</small></p>   
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>