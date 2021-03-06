<?php

namespace supercool\scheduler\jobs;

/**
 * Scheduler plugin for Craft CMS 3.x
 *
 * Scheduler
 *
 * @link      http://supercooldesign.co.uk
 * @copyright Copyright (c) 2018 Supercool
 */

interface ISchedulerJob
{

	// Public Methods
	// =========================================================================

	/**
	 * Run the specified Job.
	 *
	 * @return bool
	 */
	public function run();
}
