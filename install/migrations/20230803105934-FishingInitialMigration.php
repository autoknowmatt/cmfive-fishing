<?php

class FishingInitialMigration extends CmfiveMigration
{
    public function up()
    {
        // UP
        $column = parent::Column();
        $column->setName('id')
                ->setType('biginteger')
                ->setIdentity(true);

        if (!$this->hasTable("fishing_fisherman")) { //it can be helpful to check that the table name is not used
            $this->table("fishing_fisherman", [ // table names should be appended with 'ModuleName_'
                "id" => false,
                "primary_key" => "id"
            ])->addColumn($column) // add the id column
                ->addIdColumn('user_id')
                ->addStringColumn('state')
                ->addStringColumn('timezone')
                ->addCmfiveParameters() // this function adds some standard columns used in cmfive. dt_created, dt_modified, creator_id, modifier_id, and is_deleted.
                ->create();
        }
    }

    public function down()
    {
        // DOWN
        $this->hasTable('fishing_fisherman') ? $this->dropTable('fishing_fisherman') : null;
    }

    public function preText()
    {
        return null;
    }

    public function postText()
    {
        return null;
    }

    public function description()
    {
        return null;
    }
}
