<h4>Instruções</h4>

<ul>
    <li>Clonar o projeto utilizando <code>git clone https://github.com/renanthole/cupola.git</code></li>
    <li>Acesse a pasta do projeto <code>cd cupola</code> e utilize os comandos <code>composer install</code> e <code>npm install && npm run dev</code></li>
    <li>Copie o arquivo .env.example: <code>cp .env.example .env</code> e informe os dados de conexão com o banco de dados</li>
    <li>Executar os comandos <code>php artisan migrate</code> para criação das tabelas no banco de dados (Homologado em mySQL e PostgreSQL</li>
    <li><code>.\vendor\bin\phpunit</code> após a criação das tabelas do banco de dados</li>
    <li><code>php artisan key:generate</code> Para a criação da chave da aplicação</li>
    <li><code>php artisan serve</code> Para iniciar a aplicação</li>
</ul>