<?php

include_once ROOT. '/models/News.php';

class NewsController {

	public function actionIndex()
	{
		
		$newsList = array();
		$newsList = News::getNewsList();

		require_once(ROOT . '/views/news/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$newsItem = News::getNewsItemByID($id);
            if ($newsItem) {
                require_once(ROOT . '/views/news/view.php');
            }
            else {
                require_once(ROOT . '/views/news/404_not_found.php');
            }



/*			echo 'actionView'; */
		}

		return true;

	}

}

