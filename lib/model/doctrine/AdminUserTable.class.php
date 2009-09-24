<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

class AdminUserTable extends opDoctrineTable
{
  public function retrieveByUsername($username)
  {
    return $this->createQuery()
      ->where('username = ?', $username)
      ->fetchOne();
  }

  public function retrievesAll()
  {
    return $this->createQuery()->execute();
  }
}
