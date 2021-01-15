<?php
namespace Code\Controller;


use Code\DB\Connection;
use Code\Entity\Category;
//use Code\Entity\Post;
use Code\Session\Flash;
use Code\View\View;

class CategoryController
{
	public function index($slug)
	{
		try{
			$category = (new Category(Connection::getInstance()))->where(['slug' => $slug]);

			$view = new View('site/category.phtml');
			$view->category = (new Category(Connection::getInstance()))
							->where(['id' => $category['id']]);
			//$view->category = $category['name'];

			return $view->render();
		} catch (\Exception $e) {
			Flash::add('warning', 'Nenhum Post para a categoria ' . $category['name'] . ' foi encontrado!');
			header('Location: ' . HOME);
		}
	}
}