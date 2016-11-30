<?php

  require_once 'Credentials.php';

  // TODO: https://developers.facebook.com/docs/graph-api/webhooks
  class Event {
    private $page_obj = '';
    private $id = '';
    private $name = '';
    private $description = '';
    private $place = [];
    private $place_city = '';
    private $place_street = '';
    private $start_date = '';
    private $start_date_humanized = '';
    private $start_date_month = '';
    private $start_date_day = '';
    private $start_date_year = '';
    private $start_date_time = '';
    private $cover = '';
    private $end_date = '';
    private $event_url = '';
    private $event_endtime_id = '';
    private $local = '';
    private $expires = '';
    private $fb_page_id;

    public function event_url() { return $this->event_url; }

    public function id() { return $this->id; }

    public function name() { return $this->name; }

    public function description() { return $this->description; }

    public function place() { return $this->place; }

    public function place_city() { return $this->place_city; }

    public function place_street() { return $this->place_street; }

    public function start_date() { return $this->start_date; }

    public function start_date_humanized() { return $this->start_date_humanized; }

    public function start_date_month() { return $this->start_date_month; }

    public function start_date_day() { return $this->start_date_day; }

    public function start_date_year() { return $this->start_date_year; }

    public function start_date_time() { return $this->start_date_time; }

    public function cover() { return $this->cover; }

    public function end_date() { return $this->end_date; }

    public function local() { return $this->local; }

    public function __construct($page) {
      $this->page_obj = $page;
    }

    // TODO: implement an fallback when the access_token gets invalid
    /*
    * fetch Event from Facebook API
    */
    public function getFacebookEvents($facebookPageId) {
      $this->fb_page_id = $facebookPageId;

      $credentials = new Credentials();
      $app_secret = $credentials->getApp_secret();
      $app_id = $credentials->getApp_id();
      $access_token = $credentials->getAccess_token();

      // specify the "since" and "until" dates to get the events
      $year_range = 1;
      $since_date = date('Y-m-d', strtotime("now"));
      $until_date = date('Y-06-01', strtotime('+' . $year_range . ' years'));

      // unix timestamp years for the fb api
      $since_unix_timestamp = strtotime($since_date);
      $until_unix_timestamp = strtotime($until_date);

      $fields = "id,name,description,place,timezone,start_time,end_time,cover";

      $json_link = "https://graph.facebook.com/v2.8/{$this->fb_page_id}/events/attending/?fields={$fields}&access_token={$access_token}&since={$since_unix_timestamp}&until={$until_unix_timestamp}";

      // error handling
      $json = file_get_contents($json_link);

      $events = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

      return $events;
    }

    public function getEvent($events) {
      date_default_timezone_set("Europe/Berlin");

      $events = a::sort($events['data'], 'start_time', 'asc');

      $event = a::first($events);
      $this->id = isset($event['id']) ? $event['id'] : '';
      $this->name = isset($event['name']) ? $event['name'] : '';
      $this->description = isset($event['description']) ? $event['description'] : '';
      $this->place = isset($event['place']['location']) ? $event['place']['location'] : '';
      $this->place_city = isset($event['place']['location']['city']) ? $event['place']['location']['city'] : '';
      $this->place_street = isset($event['place']['location']['street']) ? $event['place']['location']['street'] : '';
      $this->end_date = isset($event['end_time']) ? $event['end_time'] : '';
      $this->event_url = "https://facebook.com/events/{$event['id']}/";

      $this->cover = $this->getCoverImage($event, $this->page_obj);


      if(isset($event['start_time'])) {
        $start_date = $this->parseFacebookDateFormat($event['start_time']);
        $this->start_date_day = $start_date['day'];
        $this->start_date_month = $start_date['month'];
        $this->start_date_year = $start_date['year'];
        $this->start_date_humanized = $start_date['date'];
        $this->start_date_time = $start_date['time'];
        $this->start_date = $start_date;
      }

      if(isset($event['end_time'])) {
        $this->end_date = $this->parseFacebookDateFormat($event['end_time']);
      }

      $this->expires = date('Y-m-d 12:00', strtotime('+1 day'));

      return $this;
    }

    private function getCoverImage($event, $page) {
      if(isset($event['cover']['source'])) {
        $url = $event['cover']['source'];
        $cover = $this->generateThumbnail($url, $page);
      } else {
        $cover = undefined;
      }
      return $cover;
    }

    /*
    * Takes an event date from the facebook API with format: 2016-11-11T13:00:00+0100
    * and returns an array of the format [
    *   'date' => 'Sunday, 13.11.2016',
    *   'time' => 10:00,
    *   'day' => 17,
    *   'month' => Nov,
    *   'year' => 2016
    * ]
    */
    private function parseFacebookDateFormat($_date) {
      // slice 2016-11-11T13:00:00+0100 into [0] => '2016-11-11', [1] => '13:00:00+0100'
      $exploded = explode("T", $_date);
      $date = $exploded[0];
      $time = $exploded[1];

      // remove the ':00+0100' part from the time value '13:00:00+0100'
      $time = a::first(preg_split("/\:[0-9]{2}\+[0-9]{1,4}/", $time));

      $date_id = $date . ' ' . $time . ':00';

      // set the date format to '2016-01-31' so the parser does recognizes it
      $format = date_create_from_format('Y-m-d', $date);
      // get a human readable format: 'Sunday, 13.11.2016'
      $date = date_format($format, 'l, d.m.Y');
      $day = date_format($format, 'd');
      $month = date_format($format, 'M');
      $year = date_format($format, 'Y');

      return ['date' => $date, 'time' => $time, 'day' => $day, 'month' => $month, 'year' => $year, 'date_id' => $date_id];
    }

    public function generateThumbnail($imageUrl, $page) {
      // some image url for testing purposes
      // $imageUrl = "https://scontent-frt3-1.xx.fbcdn.net/t31.0-8/14714803_1876588675894659_4416670865134567220_o.jpg";

      // create an md5 hash for the filename (hashes are unique)
      $imageName = hash('md5', $imageUrl);

      // check if there are images in folder content/1-news/**
      if($image = $page->images()->first()) {
        // echo 'pictures ' . $image->name() . ' exists<br>';
        if($image->name() === $imageName) {
          // echo 'image you want to create, already existed -> return<br>';
          return $image;
        }
        // the image name (hash) does not match the existing one,
        // so we need to update the event image and replace it with the new one
        else {
          try {
            // replace the image with the new one
            $image->delete();
            // echo 'The file has been deleted <br>';
            return $this->createImage($imageUrl, $page, $imageName);

          } catch(Exception $e) {
            // echo 'The file could not be deleted';
          }
        }
      }
      else {
        // echo 'there was no image -> create one <br>';
        return $this->createImage($imageUrl, $page, $imageName);
      }
    }

    private function createImage($imageUrl, $page, $imageName) {
      // fetch the event header image from the facebook event page
      $imageData = file_get_contents($imageUrl);

      // save the file to the kirby filesystem 'content/1-news/**'
      file_put_contents($page->root() . DS . f::safeName($imageName) . '.jpg', $imageData);
      $image = new File($page->images(), f::safeName($imageName) . '.jpg');

      // echo 'image ' . $imageName . ' got created <br>';
      return $image;
    }

  }
?>
