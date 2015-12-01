<?php
namespace PhpTelzio\Mapper;

use PhpTelzio\Entity\Account;

class AccountMapper
{
    static public function mapAccount($rawAccountData)
    {
        if(!is_array($rawAccountData)) {
            $rawAccountData = json_decode($rawAccountData, true);
        }

        return self::mapAccountData($rawAccountData);
    }

    private static function mapAccountData($rawAccountData)
    {
        $account = new Account();

        if (isset($rawAccountData['Balance'])) {
            $account->setBalance($rawAccountData['Balance']);
        }

        return $account;
    }
}