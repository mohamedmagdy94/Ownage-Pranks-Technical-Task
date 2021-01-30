<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{

    public $autoId = false;

    public function up()
    {

        $this->table('app_categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('ext_id', 'string', [
                'default' => null,
                'limit' => 24,
                'null' => false,
            ])
            ->addColumn('status', 'string', [
                'default' => 'active',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('img_url', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('ord', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('synced', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'ext_id',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('app_characters')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('ext_id', 'string', [
                'default' => null,
                'limit' => 24,
                'null' => false,
            ])
            ->addColumn('status', 'string', [
                'default' => 'active',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('is_influencer', 'tinyinteger', [
                'default' => '0',
                'limit' => 3,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('facebook_url', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('youtube_url', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('img_url', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('ord', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('data', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('synced', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'ext_id',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('app_prank_scripts')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('ext_id', 'string', [
                'default' => null,
                'limit' => 24,
                'null' => false,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('likes', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('our_likes', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('our_dislikes', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('our_favorites', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('views', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('sent', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('our_sent', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('prank_of_the_week', 'integer', [
                'default' => '0',
                'limit' => 2,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('tags', 'string', [
                'default' => null,
                'limit' => 512,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 512,
                'null' => false,
            ])
            ->addColumn('share_text', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('img_url', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('default_app_character_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('synced', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'ext_id',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('app_prank_scripts_app_categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('app_prank_script_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('app_category_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->create();

        $this->table('app_prank_scripts_app_characters')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('app_prank_script_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('app_character_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('is_default', 'tinyinteger', [
                'default' => '0',
                'limit' => 3,
                'null' => false,
                'signed' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('app_categories')->drop()->save();
        $this->table('app_characters')->drop()->save();
        $this->table('app_prank_scripts')->drop()->save();
        $this->table('app_prank_scripts_app_categories')->drop()->save();
        $this->table('app_prank_scripts_app_characters')->drop()->save();
    }
}
