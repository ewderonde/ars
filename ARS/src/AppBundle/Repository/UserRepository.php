<?php

namespace AppBundle\Repository;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityRepository;


class UserRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getAllUsers() {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select('u')
            ->from('AppBundle:User', 'u')
            ->orderBy('u.lastName', 'ASC');

        return $qb;

//        $result = $qb->select('u.id', 'u.firstName', 'u.middleName', 'u.lastName')
//            ->from('AppBundle:User', 'u')
//            ->where('u.profile = :profile')
//            ->setParameter('profile', $profile)
//            ->getQuery()
//            ->getArrayResult();
//        return $result;
    }
}