<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;

class ProductsController extends Controller
{
    public function show()
    {

        $client = new GuzzleHttp\Client();
        // $res = $client->request('GET', 'https://dummyjson.com/products');
        // $data = $res->getBody();
        // $json = json_decode($data, true);
        // $products = $json['products'];

        $wc_res = $client->request('GET', 'https://losangelesvideotransfer.net/wp-json/wc/v3/products/1611/variations', ['auth' => [env('WOOCOMMERCE_CONSUMER_KEY'), env('WOOCOMMERCE_CONSUMER_SECRET')]]);
        $wc_data = $wc_res->getBody();
        $products = json_decode($wc_data, true);
        // dd($products);

        // $products = [
        //     'product-1' => 'Product 1 Title',
        //     'product-2' => 'Product 2 Title'
        // ];

        return view('products-test', [
            'products' => $products
        ]);
    }
}
