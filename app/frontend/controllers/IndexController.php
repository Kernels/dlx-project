<?php

class IndexController extends Controller
{
    public $layout = '//layouts/main';

    public function actionIndex()
    {
	//echo '123';
	$this->render('index');
    }
}