<?php
use yii\helpers\TableauHelper
?>
<!--
  This viz will work for both users, since both users have access to the default site.
  Try logging in as both 'demo' and 'admin' to see how they behave.
-->
<script type='text/javascript' src='<?= Yii::$app->params['tableau_server_url'] ?>/javascripts/api/viz_v1.js'></script>
<div class='tableauPlaceholder' style='width: 1792px; height: 962px;'>
  <object class='tableauViz' width='1200' height='962' style='display:none;'>
    <param name='embed_code_version' value='3' />
    <param name='ticket' value='<?= TableauHelper::getTicket(['targetSite' => 'second']) ?>'/>
    <param name='site_root' value='&#47;t&#47;second' />
    <param name='name' value='Regional&#47;Obesity' />
    <param name='tabs' value='yes' />
    <param name='toolbar' value='yes' />
    <param name='showAppBanner' value='false' />
  </object>
</div>