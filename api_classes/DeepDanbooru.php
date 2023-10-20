<?php 

class DeepDanbooru extends API {

    function getInfo() : array
    {
        return [
            'icon' => '',
            'site' => 'https://github.com/KichangKim/DeepDanbooru',
            'info' => `
            DeepDanbooru is an anime-style girl image tag estimation system. Requires a local install.
            `,
        ];
    }

    function getConfParams() : array
    {
        return [
            'BIN_PATH' => 'deepdanbooru', 
            'DISALLOW_TAGS' => '', 
            'ALLOW_TAGS' => '', 
        ];
    }

    function generateTags($conf, $params) : array
    {
        $file_path = $this->getFileName($params['imageId']);

        // TODO: run bin from path $conf["BIN_PATH"]

        $tags = [];

        // TODO: parse the output
        // for ($i=0; $i < min([count($json_response->tags), $params['limit']]); $i++) { 
        //     $tagObjectArray = json_decode(json_encode($json_response->tags[$i]), true);
        //     array_push($tags, $tagObjectArray["name"]);
        // }
        
        return $tags;
    }
}
