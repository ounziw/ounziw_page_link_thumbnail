<?php defined('C5_EXECUTE') or die('Access Denied.');

if ($internalLinkCID ) {
    $page = Page::getByID($internalLinkCID);
    if (is_object($page)) {
        $thumbnail = $page->getAttribute('thumbnail');
        if ($thumbnail) {
            $img = Core::make('html/image', array($thumbnail));
            $tag = $img->getTag();
            $tag->alt($page->getCollectionName());
            $tag->addClass('col-xs-4 col-sm-3 pull-left img-responsive');
        } else {
            $tag = '<img src="' . $this->getBlockURL()  . '/img/noimg.jpg" class="col-xs-4 col-sm-3 pull-left img-responsive" />';
        }
        ?>
        <div class="row pagelink">
            <div class="col-xs-12">
                <h4 class="pagelinktitle"><a href="<?php echo h($page->getCollectionLink());?>"><?php echo $page->getCollectionName();?></a></h4>
            </div>
            <a href="<?php echo h($page->getCollectionLink());?>"><?php echo $tag; ?></a>
            <p class="pagelinkcontent"><?php echo $page->getCollectionDescription();?></p>
        </div>
        <?php
    } else {
        echo '<!-- Page does not exist. ID: ' . $internalLinkCID . ' -->';
    }
} elseif ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page Link Thumbnail Block.'); ?></div>
<?php
}