<?php

/*
 * This file is part of the "Prestashop SEO ToolKit" module.
 *
 * (c) Faktiva (http://faktiva.com)
 *
 * NOTICE OF LICENSE
 * This source file is subject to the CC-BY-4.0 license that is
 * available at the URL https://creativecommons.org/licenses/by/4.0/
 *
 * DISCLAIMER
 * This code is provided as is without any warranty.
 * No promise of being safe or secure
 *
 * @author   AlberT <albert@faktiva.com>
 * @license  https://creativecommons.org/licenses/by/4.0/  CC-BY-4.0
 * @source   https://github.com/faktiva/prestashop-seo-tk
 */

header('Expires: Fri, 31 Dec 1999 23:59:59 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');

header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

header('Location: ../');
return;
