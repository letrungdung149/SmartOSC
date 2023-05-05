<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryCatalogApi\Model;

use Magento\Framework\Validation\ValidationResult;

/**
 * Responsible for Product Source un-assignment validation
 *
 * @api
 */
interface BulkSourceUnassignValidatorInterface
{
    /**
     * Validates a mass un-assignment request
     *
     * @param array $skus
     * @param array $sourceCodes
     * @return ValidationResult
     */
    public function validate(array $skus, array $sourceCodes): ValidationResult;
}
