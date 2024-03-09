<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;

class FormatsController extends Controller
{
    public function show($productId)
    {

        $client = new GuzzleHttp\Client();
        // $res = $client->request('GET', 'https://dummyjson.com/products');
        // $data = $res->getBody();
        // $json = json_decode($data, true);
        // $products = $json['products'];

        // /1611/variations

        $wc_res = $client->request('GET', 'https://losangelesvideotransfer.net/wp-json/wc/v3/products/' . $productId, ['auth' => [env('WOOCOMMERCE_CONSUMER_KEY'), env('WOOCOMMERCE_CONSUMER_SECRET')]]);
        $wc_data = $wc_res->getBody();
        $formats = json_decode($wc_data, true);
        // dd($formats['attributes'][0]['options']);
        $formats = $formats['attributes']['0']['options'];
        // $formats = array_map(function ($n) {
        //     return explode(' / ', $n);
        // }, $formats);
        // dd(array_merge($formats));

        // $products = [
        //     'product-1' => 'Product 1 Title',
        //     'product-2' => 'Product 2 Title'
        // ];

        return view('components/_product_formats', [
            'formats' => $formats
        ]);
    }
}
