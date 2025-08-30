# Sistema de cadastro de contratos

## Pré-requisitos

PHP 8+

MySQL

(Opcional) Apache/Nginx se quiser rodar via servidor web completo

**1. Configure o `.env` com suas credenciais.**

```
   DB_HOST=localhost
   DB_USER=your_mysql_user
   DB_PASS=your_mysql_password
   DB_NAME=contracts_db
```

**2. Rode: php run_migrations.php**

`php run_migrations.php`

O script cria o banco automaticamente se ele não existir.

**3. Rode: php run_seeds.php**
s
`php run_seeds.php`

**4. Rode o projeto com o server embutido do PHP**

`php -S localhost:8000`

Se preferir pode criar um vhost no apache como no meu Debian, ou se estiver utilizando Windows ainda pode executar com XAMPP ou WAMPP.
