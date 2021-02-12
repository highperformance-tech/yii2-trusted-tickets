<?php

namespace yii\helpers;

use Yii;
use yii\httpclient\Client;

class TableauHelper
{
    public static function getTicket($parms = [])
    {
      $username = '';
      $targetSite = '';
      extract($parms,EXTR_IF_EXISTS);
      
      if ($username == '') 
      {
        $username = Yii::$app->user->identity->username;
      }
      $requestData['username'] = $username;
      
      if ($targetSite != '')
      {
        $requestData['target_site'] = $targetSite;
      }
      
      $client = new Client();
      $response = $client->createRequest()
          ->setMethod('POST')
          ->setUrl(Yii::$app->params['tableau_server_url'].'/trusted')
          ->setData($requestData)
          ->send();
      $ticket = $response->content;
      if ($ticket == '-1' or !$response->isOk)
      {
        throw new \Exception("Failed to retrieve trusted ticket for $username. Please refer to https://help.tableau.com/current/server/en-us/trusted_auth_trouble.htm");
      } else {
        return $ticket;
      }
    }
}