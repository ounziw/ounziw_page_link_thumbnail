<?php defined('C5_EXECUTE') or die('Access Denied.');

$app = \Concrete\Core\Support\Facade\Application::getFacadeApplication();
$ps = $app->make('helper/form/page_selector');
?>

<fieldset>
    <div class="form-group">
        <?php
        echo $form->label('internalLinkCID', t('Page'));
        echo $ps->selectPage('internalLinkCID', isset($internalLinkCID) ? $internalLinkCID : null);
        ?>
    </div>

</fieldset>

