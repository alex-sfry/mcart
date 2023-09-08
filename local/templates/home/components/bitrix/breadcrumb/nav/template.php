<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

        
$strReturn .= '<div style="display: flex; justify-content: center;" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	// $arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					<span itemprop="name">'.$title.'</span>
				</a><span class="mx-2 text-white">&bullet;</span>
				<meta itemprop="position" content="'.($index + 1).'" />
			</div>';
	}
	else
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item">
                <strong class="text-white">
                    <span>'.$title.'</span>
                </strong>
			</div>';
	}
}

$strReturn .= '<div style="clear:both"></div></div></div>
</div>
</div>
</div>';


return $strReturn;

// <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
//       <div class="container">
//         <div class="row align-items-center justify-content-center text-center">
//           <div class="col-md-10">
//             <h1 class="mb-2">About Us</h1>
//             <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">About</strong></div>
//           </div>
//         </div>
//       </div>
//     </div>