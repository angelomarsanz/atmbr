<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TmbrUsersFixture
 *
 */
class TmbrUsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_login' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_pass' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_nicename' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_email' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_url' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_registered' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        'user_activation_key' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'display_name' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'user_login_key' => ['type' => 'index', 'columns' => ['user_login'], 'length' => []],
            'user_nicename' => ['type' => 'index', 'columns' => ['user_nicename'], 'length' => []],
            'user_email' => ['type' => 'index', 'columns' => ['user_email'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8mb4_unicode_520_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'ID' => 1,
                'user_login' => 'Lorem ipsum dolor sit amet',
                'user_pass' => 'Lorem ipsum dolor sit amet',
                'user_nicename' => 'Lorem ipsum dolor sit amet',
                'user_email' => 'Lorem ipsum dolor sit amet',
                'user_url' => 'Lorem ipsum dolor sit amet',
                'user_registered' => '2019-02-18 02:49:54',
                'user_activation_key' => 'Lorem ipsum dolor sit amet',
                'user_status' => 1,
                'display_name' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
