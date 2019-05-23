<?php

use Phinx\Migration\AbstractMigration;

class ProductsTableCreate extends AbstractMigration
{
    public function up()
    {
        $this->table('products')
            ->addColumn('name', 'string', ['limit' => 120])
            ->save();
    }

    public function down()
    {
        $this->dropTable('products');
    }
}
