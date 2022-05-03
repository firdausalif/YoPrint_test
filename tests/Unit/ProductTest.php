<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Repositories\Eloquent\ProductRepository;
use Tests\TestCase;
use Mockery;

class ProductTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_can_create_if_data_not_exist_or_update_if_data_exist() : void
    {
        $key = array('unique_key' => 6200);
        $data = array(
            'product_title' => "Hanes &#174;  EcoSmart &#174;  - 5.2-Ounce Jersey Knit Sport Shirt. 054X",
            'product_description' => "|   5.2-ounce, 50/50 cotton/poly     Made with up to 5% recycled polyester  Tear-away label     Welt collar and cuffs     2-button placket     Pearlized buttons     Double-needle hem  Please note: This product is transitioning from tag-free labels to tear-away labels. Your order may contain a combination of both.    ",
            'style' => "054X",
            'sanmar_mainframe_color' => "White",
            'size' => "S",
            'color_name' => "White",
            'piece_price' => 28.08
        );

        $product = new ProductRepository(new Product);
        $created = $product->insertOrUpdateProduct($key,$data);

        $this->assertInstanceOf(Product::class, $created);
        $this->assertEquals($key['unique_key'], $created->unique_key);
        $this->assertEquals($data['product_title'], $created->product_title);
        $this->assertEquals($data['product_description'], $created->product_description);
        $this->assertEquals($data['style'], $created->style);
        $this->assertEquals($data['sanmar_mainframe_color'], $created->sanmar_mainframe_color);
        $this->assertEquals($data['size'], $created->size);
        $this->assertEquals($data['color_name'], $created->color_name);
        $this->assertEquals($data['piece_price'], $created->piece_price);

        $this->assertDatabaseHas('products', [
            'unique_key' => 6200,
        ]);

        $data = array(
            'size' => "L"
        );

        $updated = $product->insertOrUpdateProduct($key, $data);
        $this->assertInstanceOf(Product::class, $updated);
        $this->assertEquals($key['unique_key'], $updated->unique_key);
        $this->assertEquals($data['size'], $updated->size);

        $this->assertDatabaseHas('products', [
            'unique_key' => 6200,
            'size' => $data['size']
        ]);
    }
}
