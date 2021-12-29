<?php
// Copyright (c) 2021 Harry [Majored] [hello@majored.pw]
// MIT License (https://github.com/Majored/php-mcm-api-wrapper/blob/main/LICENSE)

/** A helper class for resource-related API endpoints. */
class ResourcesHelper {
    /** @var APIWrapper The current wrapper instance in use. */
    private $wrapper;

    /**
	 * Construct a new alerts helper from a wrapper instance.
	 *
	 * @param APIWrapper The current wrapper instance in use.
	 */
    function __construct(APIWrapper $wrapper) {
        $this->wrapper = $wrapper;
    }

    /**
	 * List a single page of resources.
	 *
	 * @return APIResponse The parsed API response.
	 */
    function list(): APIResponse {
        return $this->wrapper->get("resources");
    }

    /**
	 * List a single page of resources you own.
	 *
	 * @return APIResponse The parsed API response.
	 */
    function listOwned(): APIResponse {
        return $this->wrapper->get("resources/owned");
    }

    /**
	 * List a single page of resources you collaborate on.
	 *
	 * @return APIResponse The parsed API response.
	 */
    function listCollaborated(): APIResponse {
        return $this->wrapper->get("resources/collaborated");
    }

    /**
	 * Fetch information about a resource.
	 *
     * @param int The identifier of the resource.
	 * @return APIResponse The parsed API response.
	 */
    function fetch(int $resource_id): APIResponse {
        return $this->wrapper->get(sprintf("resources/%d", $resource_id));
    }

    /** 
     * Construct and return a licenses helper instance.
	 *
     * @return LicensesHelper The constructed licenses helper.
	 */
    function licenses(): LicensesHelper {
        return new LicensesHelper($this->wrapper);
    }

    /** 
     * Construct and return a purchases helper instance.
	 *
     * @return PurchasesHelper The constructed purchases helper.
	 */
    function purchases(): PurchasesHelper {
        return new PurchasesHelper($this->wrapper);
    }

    /** 
     * Construct and return a downloads helper instance.
	 *
     * @return DownloadsHelper The constructed downloads helper.
	 */
    function downloads(): DownloadsHelper {
        return new DownloadsHelper($this->wrapper);
    }

    /** 
     * Construct and return a versions helper instance.
	 *
     * @return VersionsHelper The constructed versions helper.
	 */
    function versions(): VersionsHelper {
        return new VersionsHelper($this->wrapper);
    }

    /** 
     * Construct and return an updates helper instance.
	 *
     * @return UpdatesHelper The constructed updates helper.
	 */
    function updates(): UpdatesHelper {
        return new UpdatesHelper($this->wrapper);
    }

    /** 
     * Construct and return a reviews helper instance.
	 *
     * @return ReviewsHelper The constructed reviews helper.
	 */
    function reviews(): ReviewsHelper {
        return new ReviewsHelper($this->wrapper);
    }
}