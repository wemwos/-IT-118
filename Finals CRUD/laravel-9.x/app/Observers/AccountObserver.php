<?php

namespace App\Observers;

use App\Models\Accounts;

class AccountObserver
{
    /**
     * Handle the Inventory "created" event.
     *
     * @param  \App\Models\Accounts  $accounts
     * @return void
     */

    public function creating(Accounts $accounts)
    {
        $randomNumber = mt_rand(100000, 999999);
        $accounts->ID = $randomNumber;
    }

    public function created(Inventory $inventory)
    {
        //
    }

    /**
     * Handle the Inventory "updated" event.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return void
     */
    public function updated(Inventory $inventory)
    {
        //
    }

    /**
     * Handle the Inventory "deleted" event.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return void
     */
    public function deleted(Inventory $inventory)
    {
        //
    }

    /**
     * Handle the Inventory "restored" event.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return void
     */
    public function restored(Inventory $inventory)
    {
        //
    }

    /**
     * Handle the Inventory "force deleted" event.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return void
     */
    public function forceDeleted(Inventory $inventory)
    {
        //
    }
}
