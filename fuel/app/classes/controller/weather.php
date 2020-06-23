<?php

class Controller_Weather extends Controller_Template
{

	public function get_top()
	{
		//$data["subnav"] = array('get'=> 'active' );
		//$this->template->title = 'Weather &raquo; Get';
		//$this->template->content = View::forge('weather/get', $data);
		$hello = array();
		$hello['value'] = 'Hello'; 
		return View::forge('weather/get',$hello);
	}

	public function post_city()
	{
		$content = \Input::json('city');
		$curl = \Request::forge('https://api.openweathermap.org/data/2.5/weather', 'curl');
		$curl->set_method('get');
		$curl->set_params(array (
			    'q' => $content,
			    'units' => 'metric',
			    'appid' => 'e753db02de38e5d06f1fdb54a251f5d1'
			));
		$weather = json_decode($curl->execute()->response(), true);
        $weather_json = json_encode(array(
            'weather' => $weather['weather'][0]['main'],
            'temp' => $weather['main']['temp'],
            'wind' => $weather['wind']['speed']
        ));
        return $weather_json;

	}

}
