<?php

namespace Concrete\Package\OunziwPageLinkThumbnail\Block\Pagelink;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btInterfaceWidth = 300;
    protected $btInterfaceHeight = 300;
    protected $btTable = 'btOunziwPageLinkThumbnail';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;

    public function getBlockTypeName()
    {
        return t('Page Link with Thumbnail');
    }

    public function getBlockTypeDescription()
    {
        return t('Page Link with Thumbnail');
    }


}
