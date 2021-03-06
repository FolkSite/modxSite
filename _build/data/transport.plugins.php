<?php

$plugins = array();

/*
 * New plugin
 */
$plugin = $modx->newObject('modPlugin');
$plugin->set('id', 0);
$plugin->set('name', 'Debug');
$plugin->set('description', '');
$plugin->set('disabled', 1);
$plugin->set('plugincode', getSnippetContent($sources['source_core'].'/elements/plugins/debug.php'));


/* add plugin events */
$events = array(); 
$events['OnHandleRequest']= $modx->newObject('modPluginEvent');
$events['OnHandleRequest']->fromArray(array(
    'event' => 'OnHandleRequest',
    'priority' => -1000,
    'propertyset' => 0,
),'',true,true);
$plugin->addMany($events, 'PluginEvents');
$modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events.'); flush();
 
$plugins[] = $plugin;
/*
 * 
 */

/*
 * New plugin
 */
$plugin = $modx->newObject('modPlugin');
$plugin->set('id', 0);
$plugin->set('name', 'memory_get_usage');
$plugin->set('description', '');
$plugin->set('disabled', 1);
$plugin->set('plugincode', getSnippetContent($sources['source_core'].'/elements/plugins/memory_get_usage.php'));


/* add plugin events */
$events = array(); 
$events['OnHandleRequest']= $modx->newObject('modPluginEvent');
$events['OnHandleRequest']->fromArray(array(
    'event' => 'OnWebPageComplete',
    'priority' => -0,
    'propertyset' => 0,
),'',true,true);
$plugin->addMany($events, 'PluginEvents');
$modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events.'); flush();
 
$plugins[] = $plugin;
/*
 * 
 */

return $plugins;

