# dexter_php

Aplicação Dexter feita no curso 500 que será usada no curso DevSecOps para apresentar falhas de SQL - Injection

Para provisionar o Ambiente basta rodar docker-compose up

O dump do banco se encotra na pasta include/dump/dump_postgre.sql, o processo de restore não está automátizado, para rodar o restore execute: cat dump_postgre.sql | docker exec -i 72c6672efc13 psql -U dexter -h localhost -d dexter

A aplicação possui dois módulos a area principal (deslogada) e também a area administrativa, para acessar a área administrativa basta digitar na url /admin será redirecionado para a tela de login.

Para simular a falha de SQL Injection basta digitar no campo senha: ' or '1'='1

Para corrigir o problema de SQL Injection basta trocar no arquivo admin/login.php a função logar para logarSeguro, esta função está sendo chamada na linha 5 do arquivo.

A explicação sobre a correção está na forma como a consulta é realizada no banco, a primeira função não é preparada, já a função logarSeguro está usando o recurso prepare que garante que cada um dos atributos especificados na query terão apenas uma única informação.




