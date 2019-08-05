<aside>
    <div class="sidearea">
        <label for="pricerange">Highest Price:
            <span> ₦{{ $pricerange ?? 7000 }}</span>
        </label>
        <input wire:model.debounce.500ms="pricerange" id="pricerange" type="range" min="{{ $min }}" max="{{ $max }}"
            step="500" value="7000" class="slider">
            <span class="min">₦{{ $min }}</span>
            <span class="max">₦{{ $max }}</span>
        </div>
    <div class="sidearea">
        <h4>Only Show Sale Items</h4>
        <div class="can-toggle demo-rebrand-2">
            <input wire:click="$toggle('sale')" id="e" type="checkbox">
            <label for="e">
                <div data-checked="Yes" data-unchecked="No" class="can-toggle__switch"></div>
            </label>
        </div>
    </div>
    <div class="sidearea callout">
        <h4>Special Sale!</h4>
        <p>Shop now because half our items are greatly reduced</p>
    </div>
    <div class="sidearea callout">
        <h4>Contact Us</h4>
        <p>Questions? Call us at 1-888-555-SHOP, we're happy to be of service.</p>
    </div>
</aside>