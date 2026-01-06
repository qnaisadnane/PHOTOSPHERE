<?php

Trait TraggableTrait{

    protected array $tags = [];
    
    protected bool $tagsloaded= false;
    
     public function addTag(string $tag): void{
    
        if (!in_array($tag, $this->tags)) {
            $this->tags[] = $tag;
        }
        }

    public function removeTag(string $tag): void {
    if (in_array($tag, $this->tags)) {
        $key = array_search($tag, $this->tags);
        unset($this->tags[$key]);
    }
    }

    public function getTags():array{
        return $this->tags;
    }

    public function hasTag(string $tag): bool {
    return in_array($tag, $this->tags);
    }

    public function clearTag():void{
        $this->tags = [];
    }

}