<?php
/*

Copyright 2018 Fumito MIZUNO

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */
namespace Concrete\Package\OunziwPageLinkThumbnail;

defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;

class Controller extends Package {

    protected $pkgHandle = 'ounziw_page_link_thumbnail';
    protected $appVersionRequired = '8.4.3';
    protected $pkgVersion = '0.9';

    public function getPackageDescription() {
        return t('Page Link with Thumbnail');
    }

    public function getPackageName() {
        return t('Page Link with Thumbnail');
    }

    public function install() {
        $pkg = parent::install();
        BlockType::installBlockType('pagelink', $pkg);
    }
}