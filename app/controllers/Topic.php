<?php

class Topic extends Controller {
    
    public function __construct() {
        $this->topicModel = $this->model('TopicModel');
    }

    public function index($slug) {
        $articlesByTopic = $this->topicModel->getArticlesByTopic($slug);
        $topics = $this->topicModel->getTopics();

        $data = [
            'articlesByTopic' => $articlesByTopic,
            'metaTitle' => $articlesByTopic[0]->name,
            'metaDesc' => $articlesByTopic[0]->description
        ];

        $data['topics'] = $topics;

        $this->view('includes/head',$data);
        $this->view('includes/nav', $data);
        $this->view('topic/index', $data);
        $this->view('includes/footer');
        $this->view('includes/script');
    }
}
