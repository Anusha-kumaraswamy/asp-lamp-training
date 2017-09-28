<?php

class UserRepository extends EntityRepository
{
    public function findAllQueryBuilder()
     {
        return $this->createQueryBuilder('user');
     }
}
