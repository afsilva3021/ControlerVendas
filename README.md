### Composer

Para utilizar o Projeto precisa instalar o composer
Documentação e instalação https://getcomposer.org/

Comando para baixar as dependencias 
## compuser update

Criar as migrações com phinx
### vendor\bin\phinx create -> (nome da migração)

Antes de importar as migrations verificar se no arquivo php.ini
esta com a extensão pdo_mysql descomentada se estiver comentada
so remover o comentario.

Importa as migrations
## vendor\bin\phinx migrate