<?php

class User_authentication extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->config->load('linkedins');

        $this->data['consumer_key'] = $this->config->item('api_key');
        $this->data['consumer_secret'] = $this->config->item('secret_key');
        $this->data['callback_url'] = site_url() . '/user/linkedins_submit';
    }

    function index()
    {
        echo anchor('User_authentication/linkedins', 'Sign in with Linkedin');
    }

    function linkedins()
    {
        $this->load->library('linkedins', $this->data);

        $token = $this->linkedins->get_request_token();

        $oauth_data = array(
            'oauth_request_token' => $token['oauth_token'],
            'oauth_request_token_secret' => $token['oauth_token_secret']
        );

        $this->session->set_userdata($oauth_data);

        $request_link = $this->linkedins->get_authorize_URL($token);

        header("Location: " . $request_link);
    }

    /**
     * Get Access tokens
     */
    function linkedins_submit()
    {
        $this->data['oauth_token'] = $this->session->userdata('oauth_request_token');

        $this->data['oauth_token_secret'] = $this->session->userdata('oauth_request_token_secret');

        $this->load->library('linkedins', $this->data);

        $this->session->set_userdata('oauth_verifier', $this->input->get('oauth_verifier'));

        $tokens = $this->linkedins->get_access_token($this->input->get('oauth_verifier'));

        $access_data = array(
            'oauth_access_token' => $tokens['oauth_token'],
            'oauth_access_token_secret' => $tokens['oauth_token_secret']
        );

        $this->session->set_userdata($access_data);

        /*
         * Store Linkedin info in a session
         */
        $auth_data = array('linked_in' => serialize($this->linkedins->token), 'oauth_secret' => $this->input->get('oauth_verifier'));

        $this->session->set_userdata(array('auth' => $auth_data));

        echo anchor('user/post', 'Post to Linkedin');
    }

    /**
     * Post a Status update to linkedins
     */
    function post()
    {
        $auth_data = $this->session->userdata('auth');

        $title = "Trying out a Codeignier Linkedin Library";
        $comment = "Trying out a Codeignier Linkedin Library created by Murrion Software. Get the code on Github.com";
        $target_url = "https://github.com/MurrionSoftware/codeigniter-linkedins-library";
        $image_url = ""; // optional 

        $this->load->library('linkedins', $this->data);

        $status_response = $this->linkedins->share($comment, $title, $target_url, $image_url, unserialize($auth_data['linked_in']));

        if ($status_response == '201')
        {
            echo "Linkedin Comment posted successfully";
        }
        else
        {
            print_r($status_response);
        }
    }

}