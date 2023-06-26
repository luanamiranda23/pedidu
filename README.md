# pedidu
Este projeto consiste no desenvolvimento de uma API para o gerenciamento de uma loja, fornecendo endpoints para realizar operações CRUD (Create, Read, Update, Delete) de produtos. Além disso, também é necessário criar dois endpoints para integração com APIs de terceiros.

Desenvolvimento de uma API para Gerenciamento de Loja
Este projeto consiste no desenvolvimento de uma API para o gerenciamento de uma loja, fornecendo endpoints para realizar operações CRUD (Create, Read, Update, Delete) de produtos. Além disso, também é necessário criar dois endpoints para integração com APIs de terceiros.

A API será desenvolvida utilizando o framework Laravel, que é um framework PHP moderno e poderoso para o desenvolvimento de aplicativos web. O Laravel oferece uma estrutura robusta e elegante para a criação de APIs RESTful de alta qualidade.

Requisitos
PHP (versão 7.4 ou superior)
Composer (gerenciador de dependências do PHP)
Laravel (framework PHP)
Banco de dados (pode ser de sua preferência, por exemplo, MySQL, PostgreSQL, SQLite)
Configuração do Projeto
Siga os passos abaixo para configurar e executar o projeto:

Clone o repositório do projeto para o seu ambiente local:


git clone <URL_DO_REPOSITORIO>
Acesse o diretório do projeto:

cd nome-do-projeto
Instale as dependências do projeto utilizando o Composer
composer install
Crie um arquivo .env na raiz do projeto. Você pode utilizar o arquivo .env.example como base e renomeá-lo para .env. Certifique-se de configurar corretamente as informações do banco de dados de acordo com o banco de dados que você estiver utilizando.

Gere uma chave de criptografia para o aplicativo Laravel:


php artisan key:generate
Execute as migrações do banco de dados para criar as tabelas necessárias:


php artisan migrate
Inicie o servidor de desenvolvimento do Laravel:


php artisan serve
A API agora estará disponível em http://localhost:8000.

Endpoints
A API fornecerá os seguintes endpoints para gerenciamento de produtos:

GET /api/products: Retorna uma lista de todos os produtos.
GET /api/products/{id}: Retorna os detalhes de um produto específico.
POST /api/products: Cria um novo produto.
PUT /api/products/{id}: Atualiza as informações de um produto existente.
DELETE /api/products/{id}: Remove um produto existente.
Além disso, a API também fornecerá dois endpoints para integração com APIs de terceiros. Esses endpoints podem ser personalizados de acordo com as APIs específicas que você está integrando.



Para acessar os endpoints "items" e "municipios" da API, você precisará utilizar uma ferramenta de cliente HTTP, como o cURL, Postman ou qualquer outro cliente de sua preferência. /items e /municipios-rio

