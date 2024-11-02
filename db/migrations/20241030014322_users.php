<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
{

    //  * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
  
    public function change(): void
    {
        $table = $this->table("Users");
        $table->addColumn("FirstName", "string", ["limit" => 30])
              ->addColumn("LastName", "string", ["limit" => 30])
              ->addColumn("UserName", "string", ["limit" => 30])
              ->addColumn("email", "string", ["limit" => 100])
              ->addColumn("password", "string", ["limit" => 30])
              ->addColumn("created", "datetime")
              ->addColumn("updated", "datetime", ["null" => true])
              ->create();
    }
}
