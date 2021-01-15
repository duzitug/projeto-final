<?php
namespace Code\Controller;

use Code\DB\Connection;
use Code\Entity\Category;
use Code\View\View;
use Code\Entity\Product;
use Code\Controller\ProductController;

class CategoriesController
{

	
	public function index()
	{
		$view = new View('site/categories.phtml');
		$view->categories = (new Category(Connection::getInstance()))->findAll();

		return $view->render();
	}

	public function getProductsByCategoryId ($categoryId) {
		$produtos = (new ProductController(  ))->getProductsByCategoryId($categoryId) ;
		
		$view = new View('site/index.phtml');
		$view->products = $produtos;
		
		return $view->render();
	}


	
}