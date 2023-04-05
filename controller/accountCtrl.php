<?php
class AccountCtrl extends Account
{
    public function insertAccountCtrl(AccountModel $account)
    {
        return $this->insertAccount($account);
    }
}
