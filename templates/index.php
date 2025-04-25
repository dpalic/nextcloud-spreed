<?php

declare(strict_types=1);
/**
 * SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

\OCP\Util::addScript('spreed', 'talk-main');
style('spreed', 'icons');


// load our custom split left/right alignment CSS
style('spreed', 'talk-custom');
