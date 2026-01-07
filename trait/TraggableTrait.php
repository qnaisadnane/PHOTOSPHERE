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

    protected function normalizeTag(string $tag): string
    {
        $tag = trim($tag);
        $tag = strtolower($tag);
        return $tag;
    }

    public function  hasAllTags(){
        if (!$this->tagsLoaded) {
            $this->loadTags();
        }
        foreach ($tags as $tag) {
            if (!in_array( $this->tags, true)) {
                return false;
            }
        }
        
        return true;
    }

    public function  hasAnyTag(){
        if (!$this->tagsLoaded) {
            $this->loadTags();
        }
        foreach ($tags as $tag) {
            if (in_array( $this->tags, true)) {
                return true;
            }
        }
        
        return false;
    }

    public function setTags(array $tags): void
    {
        $this->tags = array_map([$this, 'normalizeTag'], $tags);
        $this->tagsLoaded = true;
    }
}