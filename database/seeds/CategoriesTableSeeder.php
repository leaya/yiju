<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
//        $category = Category::firstOrNew([
//            'slug' => 'category-1',
//        ]);
//        if (!$category->exists) {
//            $category->fill([
//                'name' => 'Category 1',
//            ])->save();
//        }
//
//        $category = Category::firstOrNew([
//            'slug' => 'category-2',
//        ]);
//        if (!$category->exists) {
//            $category->fill([
//                'name' => 'Category 2',
//            ])->save();
//        }
        if (Category::count() == 0) {
            //父目录的数量
            $catParent_num = 15;
            //子目录的数量
//            $catChild_num = 50;
            $faker = app(Faker\Generator::class);
            $category = factory(Category::class)
                ->times($catParent_num)
                ->make();
            Category::insert($category->toArray());

//            $category_ids = Category::all()->pluck('id')->toArray();
//
//            $cat_childs = factory(Category::class)
//                ->times($catChild_num)
//                ->make()
//                ->each(function ($cat_child) use ($category_ids, $faker) {
//                    $cat_child->parent_id = $faker->randomElement($category_ids);
//                });
//
//            Category::insert($cat_childs->toArray());
        }
    }
}
