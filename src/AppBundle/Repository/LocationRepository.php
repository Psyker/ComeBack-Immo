<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LocationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LocationRepository extends EntityRepository
{
    public function getCities()
    {
        return $this->createQueryBuilder('l')
            ->select('l.city')
            ->groupBy('l.city')
            ->getQuery()
            ->getResult();
    }
}
