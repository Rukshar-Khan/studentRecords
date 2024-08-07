<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Term2Fixture
 */
class Term2Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'term2';
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
                'Student_id' => 1,
                'term1_id' => 1,
                'English' => 1,
                'Hindi' => 1,
                'Marathi' => 1,
                'Maths' => 1,
                'EVS' => 1,
                'Total' => 1,
                'Percentage' => 1,
                'Grade' => 'Lor',
            ],
        ];
        parent::init();
    }
}
