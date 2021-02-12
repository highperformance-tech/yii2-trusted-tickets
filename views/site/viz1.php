<?php
use yii\helpers\TableauHelper
?>
<!--
  This viz will only work for 'admin', because only 'admin' has access to the default site.
  It will throw an exception for the 'demo' user.
-->
<script type='text/javascript' src='<?= Yii::$app->params['tableau_server_url'] ?>/javascripts/api/viz_v1.js'></script>
<div class='tableauPlaceholder' style='width: 1792px; height: 962px;'>
  <object class='tableauViz' width='1200' height='962' style='display:none;'>
    <param name='embed_code_version' value='3' />
    <param name='ticket' value='<?= TableauHelper::getTicket() ?>'/>
    <param name='site_root' value='' />
    <param name='name' value='Superstore&#47;Overview' />
    <param name='tabs' value='yes' />
    <param name='toolbar' value='yes' />
    <param name='showAppBanner' value='false' />
  </object>
</div>