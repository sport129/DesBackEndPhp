# DesBackEndPhp

Como rodar o programa, foi removido .gitignore para não ter que baixar todas as dependencias do laravel, bastando apenas baixar e criar as tabelas.

Baixado o arquivo do projeto

inicialize algum servidor mysql, a versao do php tem de ser acima da 7.1, pois esta sendo utilizado o laravel 5.6

Com o mysql inicializado, criar um banco chamado desafio

usando um terminal ou cmd e dentro da pasta desafio digitar o comando

```
php artisan migrate
```

Servira para criar as tabelas do banco de dados
E logo em seguida popule o banco com um usuário administrador

```
php artisan db:seed
```

A aplicação tem dois modos, o adm que poderá mudar o status, editar e excluir alguma tarefa. Usuario só podem ver e registrar novas tarefas.
para iniciar digitar

```
php artisan serve
```

E entrar em 127.0.0.1:8000

Usuario e senha padrao é

login: admin
pass: admin

Para ver um projeto mais completo de um sistema feio em laravel, basta baixar o projeto do link abaixo

https://gitlab.com/sport127/SistemaCatracasColegioLourencoFilho