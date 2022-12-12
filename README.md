# Oficina 2.0


Projeto criado afim de participar do processo seletivo da empresa Codificar.

O projeto visa facilitar o acompanhamento dos pedidos de orçamento da oficina.

Neste projeto você conseguirá: cadastrar um novo orçamento, informando os campos id, 
nome cliente, data e hora do orçamento, nome do vendedor, descrição do orçamento e o
valor orçado.
Conseguirá também: Editar um orçamento ja criado, deletar um orçamento e fazer uma busca
pelo nome do cliente, nome do vendedor ou um intervalo de datas.

## Instalação

Projeto feito utilizando Docker com o utiliátio Laradock.

Para fazer a instalação do projeto, siga as instruições abaixo em ordem:
Faça o donwload da aplicação do laragon:

1#-faça o download do Laragon:
https://laragon.org/download/

2#-realize o Download do Docker Desktop: 
https://www.docker.com/products/docker-desktop/-

3#-Acesse o diretório 'www' do laragon em seu terminal(geralmente localizado no diretório
C:\laragon\www\)

4#-Fazendo a instalação do utilitário laradock, siga os seguintes passos:
https://laradock.io/
lembrando que o Laradock deve estar dentro do diretório (.../laragon/www)

#EXECUTE OS CONTEINERS NO TERMINAL:#
docker-compose up -d nginx mysql phpmyadmin

#EXECUTE O WORKSPACE EM BASH:#
docker exec -it laradock-workspace-1 bash

Dentro do workspace, clone o projeto:
https://github.com/LucasRAmorim/Oficina-2.git
cd oficina-2\ 


Configurações adicionais:
Os detalhes do banco no arquivo .env devem estar com as seguintes Configurações:
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=oficina
DB_USERNAME=root
DB_PASSWORD=root

Um banco de dados com o seguinte nome deve ser criado:
"oficina"

Após a execução dessas configurações, basta executar no terminal o comando
php artisan migrate;

E testar o projeto.
