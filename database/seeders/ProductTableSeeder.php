<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product(['imagepath'=>'../images/products/Jam.png',
            'title'=>'Варення з полуниці',
            'description'=>"<p>Порція&nbsp;300&nbsp;г</p>
        <p>Склад:</p>
        <ul>
          <li>полуниця</li>
          <li>ревінь</li>
          <li>цукор</li>
        </ul>
        <p>Поживна цінність 100 г продукту:</p>
        <ul>
          <li>білки &ndash; 0.2 г</li>
          <li>жири &ndash; 0.1 г</li>
          <li>вуглеводи &ndash; 72 г</li>
        </ul>
        <p>Енергетична цінність 100 г продукту &ndash; 280 ккал</p>",
            'price'=>70]);
        $product->save();

        $product = new \App\Models\Product(['imagepath'=>'../images/products/Beef.png',
            'title'=>'Яловичина тушкована',
            'description'=>"<p>400 грам</p>
                <p>Склад:</p>
                <ul>
                    <li>яловичина</li>
                    <li>лавровий лист</li>
                    <li>сіль</li>
                    <li>перець</li>
                </ul>
                <p>Енергетична цінність 100 г продукту &ndash; 213 ккал</p>
                <p>Поживна цінність 100 г продукту:</p>
                <ul>
                    <li>білки &ndash; 15</li>
                    <li>жири &ndash; 17</li>
                    <li>вуглеводи &ndash; 0</li>
                </ul>",
            'price'=>150]);
        $product->save();

        $product = new \App\Models\Product(['imagepath'=>'../images/products/Casserole.png',
            'title'=>'Запіканка',
            'description'=>"<p>Склад:</p>
                    <ul>
                        <li>сир кисломолочний</li>
                        <li>сметана</li>
                        <li>вершки</li>
                        <li>яйця курячі</li>
                        <li>гриби печериці</li>
                        <li>м&rsquo;ясо куряче</li>
                        <li>цибуля</li>
                        <li>масло рослинне</li>
                        <li>крупа манна</li>
                        <li>сіль</li>
                        <li>перець чорний</li>
                        <li>імбир мелений</li>
                        </ul>
                    <p>Енергетична цінність 100 г продукту &ndash; 320 ккал</p>
                    <p>Поживна цінність 100 г продукту:</p>
                    <ul>
                        <li>білки &ndash; 12.3 г</li>
                        <li>жири &ndash; 8.9 г</li>
                        <li>вуглеводи &ndash; 4.9 г</li>
                    </ul>",
            'price'=>85]);
        $product->save();

        $product = new \App\Models\Product(['imagepath'=>'../images/products/Honey.png',
            'title'=>'Мед',
            'description'=>"<p>Порція 650 г</p>
        <p>Склад:</p>
        <ul>
          <li>Мед натуральний гречаний</li>
        </ul>",
            'price'=>255]);
        $product->save();

        $product = new \App\Models\Product(['imagepath'=>'../images/products/Mozarela.png',
            'title'=>'Сир моцарела',
            'description'=>"<p>Склад:</p>
                <ul>
                    <li>молоко коров&rsquo;яче пастеризоване</li>
                    <li>сіль харчова</li>
                    <li>закваска бактеріальна</li>
                    <li>фермент сичужний</li>
                </ul>
                <p>Енергетична цінність 100 г продукту &ndash; 336 ккал<br>Поживна цінність 100 г продукту:</p>
                <ul>
                    <li>білки &ndash; 27.5 г</li>
                    <li>жири &ndash; 22.0 г</li>
                    <li>вуглеводи &ndash; 0.0 г</li>
                </ul>",
            'price'=>27.5]);
        $product->save();

        $product = new \App\Models\Product(['imagepath'=>'../images/products/Jam.png',
            'title'=>'Пельмені',
            'description'=>"Склад:</p>
<ul>
    <li>яловичина</li>
    <li>лавровий лист</li>
    <li>сіль</li>
    <li>перець</li>
</ul>
<p>Енергетична цінність 100 г продукту &ndash; 213 ккал</p>
<p>Поживна цінність 100 г продукту:</p>
<ul>
    <li>білки &ndash; 15</li>
    <li>жири &ndash; 17</li>
    <li>вуглеводи &ndash; 0</li>
</ul>",
            'price'=>90]);
        $product->save();

        $product = new \App\Models\Product(['imagepath'=>'../images/products/Jam.png',
            'title'=>'Сиркова маса',
            'description'=>" <p>Склад:</p>
                <ul>
                  <li>сир кисломолочний</li>
                  <li>цукрова пудра</li>
                  <li>курага</li>
                  <li>сметана</li>
                  <li>ванільний цукор</li>
                </ul>
                <p>Енергетична цінність 100 г продукту &ndash; 282 ккал<br>Поживна цінність 100 г продукту:</p>
                <ul>
                  <li>білки &ndash; 15.3 г</li>
                  <li>жири &ndash; 20.7 г</li>
                  <li>вуглеводи &ndash; 10.3 г</li>
                </ul>",
            'price'=>65]);
        $product->save();

        $product = new \App\Models\Product(['imagepath'=>'../images/products/Jam.png',
            'title'=>'Вареники',
            'description'=>"<p>Порція 450 г</p>
                <p>Склад:</p>
                <ul>
                    <li>картопля варена</li>
                    <li>цибуля ріпчаста смажена</li>
                    <li>сіль кухонна</li>
                    <li>перець чорний мелений</li>
                    <li>борошно вищого ґатунку</li>
                    <li>олія рафінована, сіль</li>
                </ul>
                <p>Енергетична цінність 100 г продукту &ndash; 157,37 ккал</p>
                <p>Поживна цінність 100 г продукту:</p>
                <ul>
                    <li>білки &ndash; 5,4 г</li>
                    <li>жири &ndash; 4,5 г</li>
                    <li>вуглеводи &ndash; 25,6 г</li>
                </ul>",
            'price'=>80]);
        $product->save();
    }
}
