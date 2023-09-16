<?php

AddEventHandler(
    'main',
    'OnAfterUserAdd',
    Array("NewUser", "addToGroup")
);

class NewUser
{
    static function addToGroup(&$arFields)
    {   
        // $arGroups = CUser::GetUserGroup($arFields["ID"]);
        if ($arFields['UF_BUYER_SELLER'] == 1) {
            $arGroups[] = 6;
            CUser::SetUserGroup($arFields["ID"], $arGroups);
            // LocalRedirect('/buyeraccount/');
        } elseif ($arFields['UF_BUYER_SELLER'] == 0) {
            $arGroups[] = 7;
            CUser::SetUserGroup($arFields["ID"], $arGroups);
            // LocalRedirect('/selleraccount/');
        } 
    }
}