<?php

namespace Tests\Unit\OverviewBO;

use App\Livewire\Backoffice\Users\UserStats;
use PHPUnit\Framework\TestCase;

class RevenueOverviewTest extends TestCase
{
    public function testIfRevenueTotalIsCorrect(){
        //arrange
        $orders = collect([
            (object) ['Subtotal' => 100],
            (object) ['Subtotal' => 100],
        ]);
        $component = new UserStats;

        //act
        $result = $component->revenueGenerated($orders);

        //assert
        $this->assertSame(200.0, (float) $result);
    }

    //assert if result is 0 when there are no orders
    public function testOrderNullEqualsZero(){
        //arrange
        $orders = null;
        $component = new UserStats;

        //act
        $result = $component->revenueGenerated($orders);

        //Assert
        $this->assertSame(0, (int)$result);
    }

    //assert result when orders is not null but doesnt have a subtotal object
    public function testOrderWithoutSubtotalEqualsZero(){
        //arrange
        $orders = collect([
            (object) ['total' => 100],
            (object) ['total' => 100],
        ]);
        $component = new UserStats;

        //act
        $result = $component->revenueGenerated($orders);

        //assert
        $this->assertSame(0, (int)$result);
    }
}
