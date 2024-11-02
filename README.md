# Composer
Para utilizar o Projeto precisa instalar o composer
Documentação e instalação https://getcomposer.org/

# Comando para baixar as dependencias 
compuser update

Criar as migrações com phinx

# Os comandos para utilziar o Linux é com a barra "/"
vendor/bin/phinx create

# Os comandos para utilziar o Windows é com a barra "\"
vendor\bin\phinx create

# vendor\bin\phinx create -> (nome da migração)
vendor\bin\phinx create

Antes de importar as migrations verificar se no arquivo php.ini
esta com a extensão pdo_mysql descomentada se estiver comentada
so remover o comentario.

# Importa as migrations
vendor\bin\phinx migrate