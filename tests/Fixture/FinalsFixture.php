<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FinalsFixture
 */
class FinalsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'term1_id' => 1,
                'term2_id' => 1,
                'total' => 1,
                'Percentage' => 1,
                'Grade' => 'Lor',
            ],
        ];
        parent::init();
    }
}
