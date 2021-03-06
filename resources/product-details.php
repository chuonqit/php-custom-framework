<?php layout('layouts.client.master') ?>
<?php section('title', '{{ $product_default["product_full_name"] }}') ?>
<?php section('content') ?>
    <h1>{{ $product_default['product_full_name'] }} - {{ $product_default['product_id'] }}</h1>
    @if($product_default['is_variant'] == 1)
        <h1>{{ priceVND($product_default['product_variant_price'] ?? $product_default['product_price']) }}</h1>
        @if($product_default['product_variant_name'])
        <form action="" method="GET" class="abc">
            @foreach($product_variant as $item)
                <label>
                    <input type="radio" name="color" value="{{ $item['product_variant_slug'] }}" {{ $product_default['product_variant_slug'] == $item['product_variant_slug'] ? "checked" : "" }} onchange="this.form.submit()">
                    {{ $item['product_variant_name'] }}
                </label>
            @endforeach
        </form>
        @endif
    @else
        <h1>{{ priceVND($product_default['product_price']) }}</h1>
    @endif
<?php endsection() ?>
