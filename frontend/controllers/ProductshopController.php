<?php

namespace frontend\controllers;

use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Fabricator;
use Yii;
use yii\web\Controller;

/**
 * @author mukol
 */
class ProductshopController extends Controller
{
    
    public function actionIndex()
    {
        $productlist = Product::find()->orderBy(['name' => SORT_DESC])->limit(5)->all();
        
        return $this->render('index', [
            'productlist' => $productlist,
        ]);
    }

        public function actionAddproduct()
    {
        $product = new Product();
        
        if ($product->load(Yii::$app->request->post()) && $product->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            return  $this->refresh();
        }
        
        return $this->render('addproduct', [
            'product' => $product,
        ]);
    }
    
    public function actionAddcategory()
    {
        $category = new Category();
        
        if ($category->load(Yii::$app->request->post()) && $category->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            return  $this->refresh();
        }
        
        return $this->render('addcategory', [
            'category' => $category,
        ]);
    }
    
    public function actionAddfabricator()
    {
        $fabricator = new Fabricator();
        
        if ($fabricator->load(Yii::$app->request->post()) && $fabricator->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            return  $this->refresh();
        }
        
        return $this->render('addfabricator', [
            'fabricator' => $fabricator,
        ]);
    }
}
