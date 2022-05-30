Esse projeto é um sistema para o cadastro de despesas pessoais.

CodeIgniter 4 Application Starter
O que é CodeIgniter?
O CodeIgniter é um Frameword PHP completo, leve, rápida, flexível e seguro. Mais informações podem ser encontradas no site oficial.

Requisitos do servidor
O PHP versão 7.2 ou superior é necessário, com as seguintes extensões instaladas:

internacional
libcurl se você planeja usar a biblioteca HTTP\CURLRequest
Além disso, certifique-se de que as seguintes extensões estejam habilitadas em seu PHP:

json (ativado por padrão - não desligue)
mbstring
mysqlnd
xml (ativado por padrão - não o desligue)

Testando a Aplicação
Baixe o projeto ou clone em um diretório de sua preferência.

Após o termiar de baixar, execute o comando composer update no diretorio criado para atualizar os repositorios do projeto.

Você pode utilizar o servidor de testes do próprio CodeIgniter utilizando o comando php spark serve, mas se preferir, pode ser usado algum servidor Web, como o Apache, IIS etc.

Lembrando que o host deve ser apostado para o diretório '/public' da aplicação

Mais detalhes na documentação oficial.

Setup
Copie o arquivo env para .env e personalizar seu aplicativo, especificamente a baseURL e quaisquer configurações do banco de dados.

Important Change with index.php
O index.php não está mais na raiz do projeto! Foi movido para dentro da pasta * public *, para melhor segurança e separação de componentes.

Isso significa que você deve configurar seu servidor da Web para "apontar" para a pasta * public * do seu projeto e não para a raiz do projeto. Uma prática melhor seria configurar um host virtual para apontar para lá. Uma prática ruim seria apontar o servidor da Web para a raiz do projeto e esperar inserir * public /...*, como o restante de sua lógica e estrutura são expostos.

Base de Dados
Use o script script.php para criar a base de dados que é utilizada no projeto.
 
Teste
Agora se tudo estiver correto, basta acessar o seu localhost e será exibido redirecionado para a pagina de login.O usuário padrão é admin abc123