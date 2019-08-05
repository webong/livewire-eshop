<?php
/*
 * Source https://github.com/Crinsane/LaravelShoppingcart/blob/master/src/CartItemOptions.php
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App;

use Illuminate\Support\Collection;

class CartItemOptions extends Collection
{
    /**
     * Get the option by the given key.
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->get($key);
    }
}