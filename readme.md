# Colaboradores Farmarcas PHP
Aplicação para gerenciar colaboradores.

![Badge](https://img.shields.io/github/stars/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/forks/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/languages/top/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/release/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/issues/SamuelPietro/ColaboradoresFarmarcasPHP) ![Badge](https://img.shields.io/github/repo-size/SamuelPietro/ColaboradoresFarmarcasPHP)


## Requisitos
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
Garanta de instalar o XAMPP primeiro.
* [XAMPP v8.1.6](https://www.apachefriends.org/download.html)
* [NODE.JS](https://nodejs.org/en/download/)
* [COMPOSER](https://getcomposer.org/download/)



## Instalação

```bash
# Clone este repositório
$ git clone <https://github.com/SamuelPietro/ColaboradoresFarmarcasPHP>

# Acesse a pasta do projeto no terminal/cmd
$ cd ColaboradoresFarmarcasPHP

# Instale as dependências do node.js
$ npm install

# Instale as dependências do composer e gere o autoloader
$ composer install

# Crie um banco de dados
# Configure o arquivo .env com os dados de acesso ao seu banco de dados

#Execute a migração das tabelas
$ php artisan migrate

# Execute a aplicação em modo de desenvolvimento
$ npm run dev

# Inicie o servidor local
$ php artisan server

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
