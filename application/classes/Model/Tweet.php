<?php
class Model_Tweet extends ORM
{
    public function add_new($Tweet)
    {
        $this->content = $Tweet;
        $this->save();
    }

    public function get_tweets()
    {
        return ORM::factory('tweet')->find_all();
    }
}