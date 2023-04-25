<h1 class="COMANDOS GIT HUB"></h1>

#sair do ">" do terminal
CTRL+C
#inicia o git hub dentro da pasta
> git init

#veririca os tatus dos arquivos
> git status

#prepara os arquivos para ser adicionado no controle de versão
> git add "nomedoseuaqruivo.formato" or git add . <- para adicionar todos os arquivos em vermelho #criando a primeira
    versão do codigo> git commit -m "Nome da alterção"

    #definindo link do projeto na nuvem
    > git remote add origin https://github.com/updatecodemaster/crud_php

    #enviando a primeira ou as alteração pro github (branch master= branch principal do projeto)
    > git push --set-upstream origin master

    #Verificando historico de versões
    > git reflog

    #Fez merda e quer voltar a uma versão antiga do codigo ? e so pegar o id da versão e fazer isso
    > git reset --hard aquioiddaversao

    #Comando para ver quais branchs estão disponiveis
    > git branch

    #Criar uma nova branch (staging = e uma branch que esta recebendo atualiações que ainda nao foram testadas)
    > git branch nomedabranch

    #Mudar projeto de uma branch para outra (Marcada com verde e a que esta em operação)
    > git checkout nomedabranch

    #Vai mudar e criar um nova branch com base em outra
    > git checkout -b "nomedabranchdeorigem" "nomedanovabranch"

    #Unir uma branch de atualização com a master por exemplo:
    > git checkout na branch master
    > da um "git pull" na branch master antes de enviar os updates para ela, esse comando traz todasos
    updates da branch master.
    > git merge nome da branch que vc quer clonar para a branch atual
    > git push

    #Faz uma solicitação a uma outra pessoa para unir meu codigo a uma branch master
    > Direto pelo gihub

    #Criar arquivo .gitignore para ignorar arquivos dos commits
    > touch .gitignore
    > dentro do arquivo, colocar o caminho do que você quer ignorar
    > example: pasta/file.php

    #Clonar um repositorio
    git clone url


    +Comandos Uteis
    //listará as configurações do git
    git config --list

    +Arquivo que gerencia qua linguagem do repositorio
    .gitattributes na raiz do repositorio

    +Linguagens de programação para adicionar no repositorio
    https://github.com/github/linguist

    ################### FIM COMANDOS GIT HUB ################

    ################### COMANDOS DOCKER + LARAVEL ################

    Instalar wsl2 + docker: https://github.com/codeedu/wsl2-docker-quickstart -
    https://www.youtube.com/watch?v=3i7oGIflpbY&ab_channel=OmniLabs

    Sempre que reiniciar o linux tem que da esse comando para iniciar o docker: sudo service docker start

    O Docker Compose instalado agora estará na versão 2, para executa-lo em vez de "docker-compose" use "docker compose"

    Para escapar de > use CTRL + C

    Code . Inicia o vscode

    ################### FIM COMANDOS DOCKER + LARAVEL ################

    ################### BOOTSTRAP + LARAVEL ################
    Instalar bootstrap no laravel
    https://mazer.dev/pt-br/laravel/dicas/como-usar-jquery-twitter-bootstrap-com-laravel-vite/
    ################### FIM BOOTSTRAP + LARAVEL ################

    ################### ARTISAN LARAVEL ################

    php artisan server -> cria um servidor apache sem a necessidade de wamp ou xampp

    php artisan make:model NomedoModel -mcr -> Cria um Model,Controller e migration automaticamente

    php artisan make:model NomedoModel -mfscr -> Cria a model,controller resource,migration,seed,factory

    php artisan migrate:fresh -> deleta todas as tabelas e executa todos os migrations de novo

    php artisan migrate:refresh -> Reseta e Execulta novamente todas as migrations
    --------------------------------------------------------------------------------------------------------------------------------------------------
    php artisan make:factory CategoriaFactory -> criar um arquivo para criar registro em massa no banco de dados
    php artisan make:seeder CategoriasSeeder -> Depois de configurar a estrututa do factory, crie esse arquivo pra
    configurar quantos dados serão criados.
    php artisan db:seed -> esse comando execulta a criação dos dados
    -------------------------------------------------------------------------------------------------------------------------------------------


    ################### FIM ARTISAN LARAVEL ################