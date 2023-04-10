<?php
class CustommerView extends Custommer
{
    public function getCustommerByIdView($id)
    {
        return $this->getCustommerById($id);
    }
}
