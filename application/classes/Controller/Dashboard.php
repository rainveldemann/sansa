<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Template
{

    public function action_index()
    {

        $new_Tweet = $this->request->post('tweet');
        if (strlen($new_Tweet) > 0) {
            $tweet_model = new Model_Tweet;

            $tweet_model->add_new($new_Tweet);
            Notify::info(Notify::SUCCESS);
        }
    }

} // End Welcome
