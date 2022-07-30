# Colaboradores Farmarcas PHP
Aplicação para gerenciar colaboradores.

![Badge](https://img.shields.io/github/stars/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/forks/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/languages/top/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/release/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/issues/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/repo-size/SamuelPietro/ColaboradoresFarmarcasPHP)


## Requisitos
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
Garanta de instalar o XAMPP primeiro.
* [XAMPP v8.1.6](https://www.apachefriends.org/download.html)
* [GIT](https://git-scm.com/downloads)
* [NODE.JS](https://nodejs.org/en/download/)
* [COMPOSER](https://getcomposer.org/download/)



## Instalação
Todo o processo de instalação é feito usando terminal!

ATENÇÂO: Recomendamos o uso do prompt de comando (CMD) pois o Power Shell não consegue executar 
corretamente todos os passos da instalação.

```bash
# Abra o seu terminal (CMD) e acesse a pasta raiz do servidor
$ cd \xampp\htdocs

# Clone este repositório
$ git clone https://github.com/SamuelPietro/ColaboradoresFarmarcasPHP.git

# Acesse a pasta do projeto no terminal/cmd
$ cd ColaboradoresFarmarcasPHP

# Instale as dependências do node.js
$ npm install

# Instale as dependências do composer e gere o autoloader
$ composer install

# Inicie os módulos Apache e MySQL no XAMPP
$ \xampp\xampp-control.exe
# Com o xampp-control aberto, clique no botão “Start” que fica ao lado de “MySQL” e “Apache”.
# Vai aparecer um “Running” do lado do botão, indicando que os serviços estão rodando nas respectivas portas.

# Conecte ao servidor MySQL
$ cd \xampp\mysql\bin
$ mysql -h localhost -u root

# Crie um banco de dados com o comando “create database”.
$ create database farmarcas;

# Encerre a conexão com o MySQL
$ exit

# Retorne para a pasta da aplicação
$ cd \xampp\htdocs\ColaboradoresFarmarcasPHP

# Configure o arquivo .env com os dados de acesso ao seu banco de dados
$ ren .env.example .env
# Caso tenha usado algum parâmetro personalizado durante a instalação pode ser necessário informa-los no arquivo .env
 
# Execute a migração das tabelas
$ php artisan migrate

# Execute a aplicação em modo de desenvolvimento
$ npm run build

# Abra outra tela do CMD sem fechar a anterior e vá para a pasta da aplicação
$ cd \xampp\htdocs\ColaboradoresFarmarcasPHP

# Inicie o servidor local
$ php artisan serve

# O servidor inciará na porta:8000 - acesse <http://localhost:8000>
```

## API
Esta aplicação conta com um conjunto de rotas iniciadas com '/api' que retorna payloads json com base na rota.
As rotas ativas nesse momento são:


```
GET http://localhost:8000/api/colaboradores (retorna todos os colaboradores)
GET http://localhost:8000/api/colaborador/1 (retorna o colaborador com PK=1)
POST http://localhost:8000/api/colaborador (cria um novo colaborador)
PUT http://localhost:8000/api/colaborador/1 (atualiza o colaborador com PK=1)
DELETE http://localhost:8000/api/colaborador/1 (exclui o colaborador com PK=1)
```


## 🛠 Tecnologias
As seguintes ferramentas foram usadas na construção do projeto:

- [Lavaravel v9.x](https://laravel.com/)
- [PHP v8.1.x](https://www.php.net/releases/8.1/en.php)
- [MariaDB v10.4.24](https://mariadb.com/kb/en/mariadb-10424-release-notes/)
- [Tailwind CSS v3.0.19](https://tailwindcss.com/)
- [Jquery v3.6.0](https://blog.jquery.com/2021/03/02/jquery-3-6-0-released/)
- [jQuery Mask Plugin v1.14.16](https://igorescobar.github.io/jQuery-Mask-Plugin/)
- [Bootstrap Icons v1.8.0](https://icons.getbootstrap.com/)



## Contribuir
Contribuições são sempre bem-vindas, sintam-se livres para criar e/ou solicitar novas funcionalidades e correções de bugs.
