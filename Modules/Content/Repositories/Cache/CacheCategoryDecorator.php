<?php

namespace Modules\Content\Repositories\Cache;

use Modules\Content\Repositories\CategoryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCategoryDecorator extends BaseCacheDecorator implements CategoryRepository
{
    public function __construct(CategoryRepository $category)
    {
        parent::__construct();
        $this->entityName = 'content.categories';
        $this->repository = $category;
    }
}
