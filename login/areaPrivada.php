<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Resume</title>
</head>
<body>
    <div class="resume">
        <div id="name">
            <h1>Gabriela Siqueira Medeiros</h1>
            <p>Brasileira, solteira, 18 anos<br/>Campo Grande, MS<br/>(67)99818-6074</p>
            <div class="links">
                <a href="mailto:gabrielasiqueiramedeiros@gmail.com">gabrielasiqueiramedeiros@gmail.com</a>
                <a href="http://www.linkedin.com/in/gabriela-siqueira-medeiros-23b83b203/">
                    Linkedin
                </a>
                <a href="http:///github.com/gabrielamed">
                    GitHub
                </a>
            </div>
        </div>
    
        <div id="objetivo">
            <h2>Objetivo</h2>
            <p>Procuro uma oportunidade para aprender e atuar na área de programação, onde pretendo fazer meu plano de carreira.<br/>
                Atualmente estou cursando Técnico em Desenvolvimento de Sistemas no Senac e em Julho irei iniciar a faculdade no curso de Sistemas para Internet no IFMS.</p>
        </div>

        <div id="comp">
            <h2>Competências</h2>
            <p>Inglês avançado - Leitura, Escrita e Conversação<br/> 
                Informática - Windows, Word, Excel, Google Docs, Sheets<br/> 
                Bom relacionamento interpessoal, facilidade de aprendizado e proativa.<br/> 
                Metodologias Ágeis/ Quadro Kanban<br/> 
                Python - iniciante<br/> 
                JavaScript - iniciante<br/> 
                HTML5 - iniciante<br/> 
                CSS - iniciante<br/> 
                MySQL - iniciante<br/> 
                GIT - iniciante
            </p>
        </div>
        <div id="exp">
            <h2>Experiência</h2>
            <div class="hold">
                <div class="display-flex">
                    <strong>Instituto Mirim de Campo Grande</strong>
                    <p id="italic">- Assistente de escritório em geral</p>
                </div>
                    <p>SET 2020 - SET 2021</p>
                    <p>- Auxiliava nas tarefas diárias do setor de infraestrutura, analisava documentos e planilhas.</p>
            </div>
        </div>

        <div id="educ">

            <h2>Eduação</h2>
            <div class="hold">
                <div class="display-flex">
                    <strong>Instituto Federal de Mato Grosso do Sul, R. Taquarí, 831</strong>
                    <p id="italic">- Sistemas para Internet</p>
                </div>
                <p>JUL 2022 - DEZ 2024</p>
            </div>
        
            <div class="hold">
                <div class="display-flex">
                    <strong>Senac Hub Academy, R. do Parque, 75</strong>
                    <p id="italic">- Técnico em Desenvolvimento de Sistemas, Projeto Fábrica de Software </p>
                </div>
                <p>JUN 2021 - OUT 2022</p>
            </div>
        
            <div class="hold">
                <div class="display-flex">
                    <strong>Senac Hub Academy, R. do Parque, 75</strong>
                    <p id="italic">- Administrador de banco de dados</p>
                </div>
                <p>OUT 2021 - FEV 2022</p>
            </div>

            <div class="hold">
                <div class="display-flex">
                    <strong>E. E. Arlindo de Andrade Gomes, Av. Júlio de Castilho 1360</strong>
                    <p id="italic">- Ensino Médio</p>
                </div>
                <p>JAN 2019 - DEZ 2021</p>
            </div>
        
        </div>
    </div>
</body>
</html>