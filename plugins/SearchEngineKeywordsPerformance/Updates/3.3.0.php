<?php
/**
 * Copyright (C) InnoCraft Ltd - All rights reserved.
 *
 * NOTICE:  All information contained herein is, and remains the property of InnoCraft Ltd.
 * The intellectual and technical concepts contained herein are protected by trade secret or copyright law.
 * Redistribution of this information or reproduction of this material is strictly forbidden
 * unless prior written permission is obtained from InnoCraft Ltd.
 *
 * You shall use this code only in accordance with the license agreement obtained from InnoCraft Ltd.
 *
 * @link https://www.innocraft.com/
 * @license For license details see https://www.innocraft.com/license
 */
namespace Piwik\Plugins\SearchEngineKeywordsPerformance;

use Piwik\Option;
use Piwik\Updater;
use Piwik\Updates as PiwikUpdates;

class Updates_3_3_0 extends PiwikUpdates
{
    public function doUpdate(Updater $updater)
    {
        Option::set('enableGoogleCrawlReportSetting', true);

        $settings = new SystemSettings();
        $settings->disableGoogleCrawlReports->setValue(false);
        $settings->save();
    }
}