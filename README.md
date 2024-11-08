<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Projeto de CRUD para o minicurso de Backend para [ENCOMP](https://www.encomp.com.br/)
## TODO DOCUMENTAÇÃO E PASSO A PASSO DA AULA: https://www.notion.so/AULA-BACKEND-ENCOMP-7d92a38f9d32400da443931118579d09

Uma API RESTful desenvolvida para gerenciar os atributos dos pets da UFES. Esta API foi criada em PHP utilizando o framework Laravel e armazena os dados em um banco de dados MYSQL, projeto feito na aula do minicurso de backend ministrando no ENCOMP (encomp.com.br) para que os alunos tenham fundamentos de orientação a objetos, aprendam crud e boas práticas de programação.

## Visão Geral

A API fornece acesso a informações detalhadas sobre os pets, permitindo que os usuários consultem atributos. Ideal para desenvolvedores que desejam integrar dados dos pets em suas aplicações.

## Funcionalidades

- **Consulta de Pets**: A API permite que os usuários acessem informações sobre os pets, incluindo seus atributos.
- **CRUD**: É possível criar, ler, atualizar e excluir dados dos pets.

## Tecnologias

- **Backend**: PHP com Laravel
- **Banco de Dados**: /MySQL

## Como Começar

### Pré-requisitos

- PHP (versão recomendada: 11)
- Composer
- MySQL

### Instalação

1. Clone o repositório:
 ```bash
 git clone https://github.com/felicio-almd/crud-pets-curso.git
 cd pets-api
 ```
2. Instale as dependências:
 ```bash
 composer install
 ```
3. Configure o arquivo `.env` com as credenciais do banco de dados PostgreSQL.
4. Execute as migrations para configurar o banco de dados:
 ```bash
 php artisan key:generate
 php artisan storage:link
 php artisan migrate
 ```
5. Inicie o servidor:
 ```bash
 php artisan serve
 ```

## Endpoints

| Método | Endpoint                | Descrição                     |
|--------|-------------------------|-------------------------------|
| GET    | /api/pets               | Retorna todos os pets         |
| POST   | /api/pets                | Cria um novo pets             |
| GET    | /api/pet/{pet}           | Retorna um pets específico    |
| PUT    | /api/pet/{pet}           | Atualiza um pets específico   |
| DELETE | /api/pet/{pet}           | Remove um pet específico      |

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.

## MADE BY FELICIO

