<?php

class FishingService extends DbService{

    public function getAllFisherman()
    {
        return $this->GetObjects('FishingFisherman',['is_deleted'=>0]);
    }

    public function getFishermanForId($id)
    {
        return $this->getObject('fisherman', $id);
    }
}
