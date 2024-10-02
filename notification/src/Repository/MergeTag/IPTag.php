<?php

/**
 * IP merge tag class
 *
 * @package notification
 */

declare(strict_types=1);

namespace BracketSpace\Notification\Repository\MergeTag;

/**
 * IP merge tag class
 */
class IPTag extends BaseMergeTag
{
	/**
	 * MergeTag value type
	 *
	 * @var string
	 */
	protected $valueType = 'string';

	/**
	 * Check the merge tag value type
	 *
	 * @param mixed $value value.
	 * @return bool
	 */
	public function validate($value)
	{
		return filter_var($value, FILTER_VALIDATE_IP) !== false;
	}

	/**
	 * Sanitizes the merge tag value
	 *
	 * @param mixed $value value.
	 * @return mixed
	 */
	public function sanitize($value)
	{
		return $value;
	}
}