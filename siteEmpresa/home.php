﻿<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Crown - Desenvolvimento de Software</title>
    <link rel="shortcut icon" href="img/icon/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleHome.css">
</head>

<body>
    <header class='height'>
        <a href="index.html" style="text-decoration: none">
            <div id="cabecalho">
                <img src="img/icon/icon-branco.png">
                <h1 id="titulo">SYSTEM CROWN</h1>
            </div>
        </a>
        <div id="menu-itens">
            <ul>
                <li><a href="#servicos">SERVIÇOS</a></li>
                <li><a href="#empresa">EQUIPE</a></li>
                <li><a href="#mvv" title="Missão, Visão e Valores">MVV</a></li>
                <li><a href="#contato">CONTATO</a></li>
                <li><a href="#suporte">PERGUNTAS</a></li>
                <li><a href="#comentarios">COMENTÁRIOS</a></li>
            </ul>
        </div>
        <?php
            error_reporting(0);
            ini_set(“display_errors”, 0 );
            session_start();
            if($_SESSION['user']){
                echo "<div id='user'> <p id='username' style='margin-right: .5vw'>".$_SESSION['user']."</p> <img src='img/userl.png'> </div>";
            }
            else {
                echo "<a id='btnLogin'>LOGIN</a>";
                if(isset($_SESSION['not_found'])) echo "<script>alert('Usuário não cadastrado!')</script>";
                unset($_SESSION['not_found']);
            }
        ?>
    </header>
        <?php
            if($_SESSION['user']){
                echo "<div id='dashboard'><a href='php/dashboard/indexa.php' class='btnDash'>DASHBOARD</a><a href='php/logout.php' class='logout'>Logout</a></div>";
            }
        ?>
    <div id="apresentacao">
        <p id="developed">developed by THIAGO. A</p>
        <div id="texto-apresentacao">
            <h1 data-animation="left">Desenvolvimento front-end, back-end, mobile, modelagem de dados e <span>muito
                    mais</span>.</h1>
            <p data-animation="right">Temos o intuito de ajudar e desenvolver em diversas áreas da TI, com foco no
                desenvolvimento de software
                para grandes e pequenos negócios, visando facilitar seu gerenciamento, proporcionando aos nossos
                clientes a melhor experiência.</p>
            <a href="#servicos"></a>
        </div>
    </div>
    <div id="servicos" class='height'>
        <h1 class="titulo">TUDO QUE OFERECEMOS<br /> PARA SUA EMPRESA</h1>
        <div id="itens">
            <button id="voltar"><</button>
            <div>
                <img src="img/icon1.png">
                <h1>Sistemas</h1>
            </div>
            <div>
                <img src="img/icon2.png">
                <h1>Web</h1>
            </div>
            <div>
                <img src="img/icon3.png">
                <h1>Mobile</h1>
            </div>
            <div>
                <img src="img/icon4.png">
                <h1>Design</h1>
            </div>
            <div>
                <img src="img/icon6.png">
                <h1>Reparos</h1>
            </div>
            <div>
                <img src="img/icon5.png">
                <h1>Análise</h1>
            </div>
            <button id="avancar">></button>
        </div>
        <div id="displayServico">
            <div class="serv">
                <div class="textoServ">
                    <h1>DESENVOLVIMENTO DE SISTEMAS</h1>
                    <p>Trabalhamos para desenvolver <span>o melhor</span> para a sua empresa.
                        Nossa
                        equipe de especialistas passa dia e
                        noite se dedicando para resolver problemas reais utilizando as melhores e mais requisitadas
                        linguagens do
                        mercado.</p>
                </div>
            </div>
            <div class="serv">
                <div class="textoServ">
                    <h1>DESENVOLVIMENTO WEB</h1>
                    <p>Construindo com HTML5, estilizando com CSS3 e automatizando com
                        JavaScript,
                        nós <span>entregamos a perfeição</span> aos nossos clientes. Com sites modernos e feito com o
                        que há
                        de melhor das linguagens web.</p>
                </div>
            </div>
            <div class="serv">
                <div class="textoServ">
                    <h1>DESENVOLVIMENTO MOBILE</h1>
                    <p><span>Aprimorar</span> os canais de comunição e trazer praticidade nas
                        vendas
                        e-commerce é um dos diversos exemplos de projetos que a System Crown se compromete em fazer na
                        área
                        mobile da sua empresa para os seus clientes.</p>
                </div>
            </div>
            <div class="serv">
                <div class="textoServ">
                    <h1>DESIGN DIGITAL</h1>
                    <p>Arte também é o nosso forte! Nossa equipe pode dar um tapa no visual da sua
                        empresa com a criação de
                        novos flyers, banners, logotipos, telas para o seu site e <span>todo tipo</span> de arte digital
                        <span>que você precisar</span>.</p>
                </div>
            </div>
            <div class="serv">
                <div class="textoServ">
                    <h1>MANUTENÇÃO DE COMPUTADORES</h1>
                    <p>Para ser uma empresa <span>completa em todas as partes</span> oferecemos
                        o
                        serviço de conserto e reparo de computadores e notebooks em geral. Desde instalação de software
                        até Reballing BGA.</p>
                </div>
            </div>
            <div class="serv">
                <div class="textoServ">
                    <h1>ANÁLISE DE SISTEMAS</h1>
                    <p>Se está começando com o desenvolvimento de software da sua empresa, nós
                        temos
                        a equipe perfeita para
                        auxilia-lo na análise do seu projeto e orienta-lo para que tudo ocorra perfeitamente e <span>sem
                            imprevistos</span>.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="empresa" class='height'>
        <div id="equipe">
            <h1 class="titulo">CONHEÇA A NOSSA EQUIPE</h1>
            <div>
                <div class='imgs'><img class='equipe' src="img/equipe/func1.png"></div>
                <img class="hover" src="img/icon/equipe/icon_frontend.png">
                <div>
                    <h1>DESEN. FRONT-END</h1>
                    <p>Beatriz Moreira</p>
                </div>
            </div>
            <div>
                <div class='imgs'><img class='equipe' src="img/equipe/func2.png"></div>
                <img class="hover" src="img/icon/equipe/icon_analista.png">
                <div>
                    <h1>ANALISTA DE SISTEMAS</h1>
                    <p>Giovana Carnio</p>
                </div>
            </div>
            <div>
                <div class='imgs'><img class='equipe' src="img/equipe/func3.png"></div>
                <img class="hover" src="img/icon/equipe/icon_bd.png">
                <div>
                    <h1>BANCO DE DADOS</h1>
                    <p>Julio Duvique Andriollo</p>
                </div>
            </div>
            <div>
                <div class='imgs'><img class='equipe' src="img/equipe/func4.png"></div>
                <img class="hover" src="img/icon/equipe/icon_analista.png">
                <div>
                    <h1>ANALISTA DE SISTEMAS</h1>
                    <p>Matheus Rodrigues</p>
                </div>
            </div>
            <div>
                <div class='imgs'><img class='equipe' src="img/equipe/func5.png"></div>
                <img class="hover" src="img/icon/equipe/icon_infra.png">
                <div>
                    <h1>INFRAESTRUTURA</h1>
                    <p>Renata Garcia</p>
                </div>
            </div>
            <div>
                <div class='imgs'><img class='equipe' src="img/equipe/func6.png"></div>
                <img class="hover" src="img/icon/equipe/icon_android.png">
                <div>
                    <h1>DESEN. MOBILE</h1>
                    <p>Samuel Yoshiteru Saito</p>
                </div>
            </div>
            <div>
                <div class='imgs'><img class='equipe' src="img/equipe/func7.png"></div>
                <img class="hover" src="img/icon/equipe/icon_backend.png">
                <div>
                    <h1>DESEN. BACK-END</h1>
                    <p>Thiago Alves da Silva</p>
                </div>
            </div>
        </div>
    </div>
    <div id="mvv" class="height">
        <h1 class="titulo">MISSÃO, VISÃO E VALORES</h1>
        <div id="missao" class='mvv'>
            <img src="img/mission.png">
            <p><span>Missão: </span>Temos como tarefa ser uma empresa sólida, competitiva e inovadora. Que contribua para a sociedade com soluções tecnológicas e atenda as exigências do cliente.</p>
        </div>
        <div id="visao" class='mvv'>
            <p><span>Visão: </span>Quando se pensar em desenvolvimento de software queremos que venha na mente 'System Crown'. Nossa visão é se tornar a melhor na área de desenvolvimento em TI.</p>
            <img src="img/vision.png">
        </div>
        <div id="valores" class='mvv'>
            <img src="img/values.png">
            <p><span>Valores: </span>Valorizar os altos padrões da ética; relacionamento transparente com os clientes; executar tarefas com responsabilidade e comprometimento.</p>
        </div>
    </div>
    <div id="contato" class='height'>
        <h1 class="titulo" style="color: white">CONTRATE O SEU SERVIÇO</h1>
        <div id="info-contato">
            <form onsubmit="document.querySelector('form#formContato').reset(); alert('Mensagem enviada com sucesso! Retornaremos em até 24h.'); return false;"
                id="formContato">
                <div id="form">
                    <input class="input" type="text" id="nome" placeholder="Nome (obrigatório)" required>
                    <input class="input" type="email" id="email" placeholder="E-mail (obrigatório)" required>
                    <div id="telefone">
                        <input class="input" type="text" id="ddd" maxlength="3" placeholder="DDD">
                        <input class="input" type="text" id="numero" maxlength="9" placeholder="Telefone">
                    </div>
                    <input class="input" type="text" id="assunto" placeholder="Assunto">
                    <textarea class="input" id="texto" cols="30" rows="10" placeholder="Sua mensagem" required
                        maxlength="1000"></textarea>
                    <input class="input" type="submit" value="ENVIAR">
                </div>
            </form>
            <div id="abs-contato">
                <div>
                    <img src="img/info_phone.png" data-icon_contato>
                    <p>(11) 95760-4835</p>
                </div>
                <div>
                    <img src="img/info_local.png" data-icon_contato>
                    <p>Rua Belchior de Azevedo, n°157<br />Vila Leopoldina, São Paulo</p>
                </div>
                <div>
                    <img src="img/info_email.png" data-icon_contato>
                    <p>systemcrown0@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="suporte" class='height'>
        <h1 class="titulo">PERGUNTAS FREQUENTES</h1>
        <div id="perguntas">
            <div class="pergunta">
                <h1>A System Crown atua no Reclame Aqui?</h1>
                <p>A System Crow disponibiliza diversos canais de atendimento ao consumidor (e-mail, telefone e redes
                    sociais), além de investir continuamente para aprimorar a evolução dos mesmos, visando proporcionar
                    uma experiência diferenciada aos seus consumidores.</br>A companhia entende que o contato direto é a
                    maneira mais eficiente, ágil e transparente para alcançar soluções juntamente aos seus clientes.</p>
            </div>
            <div class="pergunta">
                <h1>A System Crown envia arquivos anexo por e-mail?</h1>
                <p>A System Crown apenas envia anexos para o e-mail dos clientes em datas programadas e com conteúdos
                    pré-definidos relacionados ao projeto (relatórios para acompanhamento). Fora desta condiçao apenas
                    quando solicitado pelo cliente o envio de boletos, relatórios, segunda via, etc.</p>
            </div>
            <div class="pergunta">
                <h1>A System Crown possui loja física?</h1>
                <p>A System Crown nasceu para ser digital, por isso trabalhamos com o sistema online e nao possuímos
                    loja física.</br>Você solicita os serviços em nossa central online e recebe seu pedido no endereço
                    de e-mail que escolher no final do prazo de entrega do projeto.</p>
            </div>
            <div class="pergunta">
                <h1>Como acompanhar o andamento do meu serviço contratado?</h1>
                <p>Nossa equipe mantém os clientes informados sobre o andamento dos serviços contratados a cada 7 dias.
                    Caso o cliente necessite de um relatório antecipado ou com mais informaçoes, basta solicitar em
                    nossa página de contato</p>
            </div>
            <div class="pergunta">
                <h1>Como entrar em contato com a System Crown?</h1>
                <p>Para nos contatar basta nos enviar uma mensagem acessando nossa página de contato, onde serão
                    encontrados canais de comunicaçao como e-mail, telefone e nossa central direta.</br>Para sua
                    comodidade, a nossa Central de Relacionamento funciona das 08h as 20h40 de segunda à sábado, exceto
                    domingos e feriados.</p>
            </div>
            <div class="pergunta">
                <h1>É possível mudar a data de entrega agendada do meu serviço?</h1>
                <p>Caso o cliente necessite alterar a data de entrega do serviço contratado é necessário que ele entre
                    em contato com a nossa equipe que estará verificando disponibilidades para novas datas de entrega.
                </p>
            </div>
            <div class="pergunta">
                <h1>Se não tiver ninguém no local para a visita técnica, o que acontece?</h1>
                <p>Em caso de ausência do cliente na visita técnica para manutençao de dispositivos, a System Crown
                    estará entrando em contato para reagendar a visita com um acréscimo de 10% no valor do serviço. Caso
                    o cliente deseje cancelar a visita será estornado 90% do valor pago.</p>
            </div>
        </div>
    </div>
    <div id="parceiros">
        <h1 style="color: #ed145b">EMPRESAS PARCEIRAS</h1>
        <div id="partner">
            <img src="img/parceiros/onpower_gray.png" id="onpower" class="partner" title="OnPower">
            <img src="img/parceiros/tyros_gray.png" id="tyros" class="partner" title="TYROS">
        </div>
    </div>
    <div id="comentarios" class='height'>
        <h1 class="titulo" style="color: white">DEIXE O SEU COMENTÁRIO</h1>
        <div id="formcomment">
            <form id="comentario" action ="home.php?id=1000#comentarios" method="POST">
                <p>Nome</p>
                <input class="input" type="text" id="insertNomeComment" name="txtnome" style="margin-bottom: .1vw" maxlength="50" required>
                <p class="erro" id="erroNome">Insira um nome</p>
                <p>Turma</p>
                <select class="input" id="turmaComment" name="txtturma" style="margin-bottom: 0" required>
                    <option value="Professor(a)">Professor(a)</option>
                    <option value="1ºA Médio" selected="">1ºA Médio</option>
                    <option value="1ºB Médio">1ºB Médio</option>
                    <option value="2ºA Médio">2ºA Médio</option>
                    <option value="2ºB Médio">2ºB Médio</option>
                    <option value="3ºA Médio">3ºA Médio</option>
                    <option value="3ºB Médio">3ºB Médio</option>
                    <option value="Etim 1º DS">Etim 1º DS</option>
                    <option value="Etim 2º Info">Etim 2º Info</option>
                    <option value="Etim 3º Info">Etim 3º Info</option>
                    <option value="Etim 1º Log">Etim 1º Log</option>
                    <option value="Etim 2º Log">Etim 2º Log</option>
                    <option value="Etim 3º Log">Etim 3º Log</option>
                    <option value="Etim 1ºA Meca">Etim 1ºA Meca</option>
                    <option value="Etim 1ºB Meca">Etim 1ºB Meca</option>
                    <option value="Etim 2ºA Meca">Etim 2ºA Meca</option>
                    <option value="Etim 2ºB Meca">Etim 2ºB Meca</option>
                    <option value="Etim 3ºA Meca">Etim 3ºA Meca</option>
                    <option value="Etim 3ºB Meca">Etim 3ºB Meca</option>
                    <option value="Modular 1º ADM">Modular 1º ADM</option>
                    <option value="Modular 2º ADM">Modular 2º ADM</option>
                    <option value="Modular 3º ADM">Modular 3º ADM</option>
                    <option value="Modular 1º DS">Modular 1º DS</option>
                    <option value="Modular 2º DS">Modular 2º DS</option>
                    <option value="Modular 3º Info">Modular 3º Info</option>
                    <option value="Modular 1º Meca">Modular 1º Meca</option>
                    <option value="Modular 2º Meca">Modular 2º Meca</option>
                    <option value="Modular 3º Meca">Modular 3º Meca</option>
                </select>
                <p class="erro" id="erroTurma">Selecione sua turma</p>
                <p>Comentário</p>
                <textarea class="input" name="txtcomentario" id="txtcomentario" placeholder="Máx. 250 caracteres" maxlength="250"
                    style="margin-bottom: 0" required></textarea>
                <p class="erro" id="erroComment" style="display: none">Insira um comentário</p>
                <p id="contadorCaracter" style="margin: 0; font-style: italic; color: #cacaca; font-size: 1vw">
                    Caracteres restantes: 250</p>
                <button class="input" type="submit" onclick="">Adicionar comentário</button>
            </form>
            <div id="comments"><?php
                error_reporting(0);
                ini_set(“display_errors”, 0 );
                
                include("php/dashboard/conexao.php");
                
                $comando = mysqli_query($con, "select * from Comentario") or die ("Erro na Seleção");
                echo "<table>";
                while($linha =mysqli_fetch_array($comando))
                {
                    $cod = $linha['cod'];
                    $nome = strtoupper($linha['nome']);
                    $turma = $linha['turma'];
                    $txt = $linha['txt'];
                    $horario = $linha['horario'];
                    echo "<div class='roll' data-comment='left'><h1 id='nomeComment'>$nome</h1><h2 id='turmaComment'>$turma</h2><p id='msgComment'>$txt</p><a href='home.php?id=$cod'><img class='lixeira' src='img/lixeira.png'/></a><p id='horaComment'>$horario</p><p>$cod</p></div>";
                }
                echo "</table>";

                echo "<script>first()
                function first(){
                    const divComments = document.getElementById('comments')
                    if(divComments.childNodes.length <= 2){
                    let h1 = document.createElement('h1')
                    h1.innerHTML = 'Seja o primeiro<br/> a comentar!'
                    h1.id = 'first'
                    h1.style = 'text-align:center; pointer-events:none'
                    divComments.appendChild(h1)
                    }
                }
                const txtComentario = document.getElementById('txtcomentario')
                function contadorCaracter() {
                    let contador = document.getElementById('contadorCaracter')
                    let caracter = txtComentario.value.length
                    contador.innerHTML = 'Caracteres restantes: '+ (250 - caracter)
                }
                txtComentario.addEventListener('keydown', () => contadorCaracter())
                txtComentario.addEventListener('keyup', () => contadorCaracter())
                </script>";

                $id = $_GET['id'];
                switch($id){
                    case 0: break;
                    case 1000: inserir(); break;
                    case $id: delete($id); break;
                    default: echo "<script>alert('default')</script>"; break;
                }
                
                function inserir(){
                    global $con;
                    $nome = $_POST['txtnome'];
                    $turma = $_POST['txtturma'];
                    $txt = $_POST['txtcomentario'];
                    $horario = date('H:i');
                    if(!empty($nome) && !empty($turma) && !empty($txt)) {
                        $comandoI = mysqli_query($con, "insert into comentario(nome,turma,txt,horario) values ('$nome','$turma','$txt','$horario')") or die ("Erro na Inserção do Registro");
                        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=home.php#comentarios'>";
                    }
                    else {
                        echo "<script>alert('Preencha todos os campos!')</script>";
                        echo "<script>javascript:history.back(-2)</script>";
                    }
                    $nome = "";
                    $turma = "";
                    $txt = "";
                }
                function delete($id){
                    global $con;
                    $comandoD = mysqli_query($con, "delete from comentario where cod = $id");
                    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=home.php#comentarios'>";
                }
                mysqli_close($con);
            ?></div>
        </div>
    </div>
   
    <footer>
        <div id="footer">
            <p><span style="font-size: 1.3vw; cursor:default">SYSTEM CROWN</span><br />Rua Belchior de Azevedo,
                157<br />Vila Leopoldina, São Paulo - SP<br /><br />Segunda - Sexta 08h 18h<br />Sábado 10h -
                16h<br /><br />Tel.: (11) 95760-4835</p>
            <img src="img/icon/logo.png">
            <p style="text-align: right">&copy; Copyright 2019<br />System Crown - Software Development<br />Todos os
                direitos reservados.</p>
            
        </div>
    </footer>
    <div id="login">
        <div class="login-container" data-animation="bottom">
            <img src="img/icon/logo-rosa.png">
            <button id="btnFechar" title="Fechar">X</button>
            <form action="php/login.php" method="POST" id="user_login">
                <p>Login</p>
                <input type="text" class="input" name="user" placeholder="Username" autocomplete="off" required>
                <p>Senha</p>
                <input type="password" class="input" name="senha" placeholder="Password" required>
                <a href="php/index.php"><span>Cadastrar-se</span></a>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
<script src="scripts/script.js"></script>
<script src="scripts/scriptData.js"></script>
<script src="scripts/scriptServicos.js"></script>
<script src="scripts/scriptEquipe.js"></script>
</html>