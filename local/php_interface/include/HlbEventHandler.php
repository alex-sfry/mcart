<?php

$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'AgentsOnAfterUpdate', Array("HlbEventHandler", "hlbOnAfterUpdate"));
$eventManager->addEventHandler('', 'AgentsOnAfterAdd', Array("HlbEventHandler", "hlbOnAfterAdd"));
$eventManager->addEventHandler('', 'AgentsOnAfterDelete', Array("HlbEventHandler", "hlbOnAfterDelete"));

class HlbEventHandler
{
    static function hlbOnAfterUpdate(\Bitrix\Main\Entity\Event &$event)
    {   
        $entity = $event->getEntity();

        $tableName = $entity->getDBTableName(); // get HL table name

        $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
        $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
    }

    static function hlbOnAfterAdd(\Bitrix\Main\Entity\Event &$event)
    {   
        $entity = $event->getEntity();

        $tableName = $entity->getDBTableName(); // get HL table name

        $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
        $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
    }

    static function hlbOnAfterDelete(\Bitrix\Main\Entity\Event &$event)
    {   
        $entity = $event->getEntity();

        $tableName = $entity->getDBTableName(); // get HL table name

        $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
        $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
    }
}



