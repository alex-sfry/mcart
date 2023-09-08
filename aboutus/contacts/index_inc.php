<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?><div class="site-section border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
                <h2><?= GetMessage('CONTACTS_TITLE1')  ?></h2>
                <p><?= GetMessage('CONTACTS_TEXT1')  ?></p>
            </div>
            <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
                <h2><?= GetMessage('CONTACTS_TITLE2')  ?></h2>
                <p><?= GetMessage('CONTACTS_TEXT2')  ?></p>
            </div>
        </div>

    </div>
</div>
</div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>