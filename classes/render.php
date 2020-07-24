<?php

class render {


    public function video($video){
        $output = '<div></div><div class="video-container">';
    
        $url = 'https://www.youtube.com/embed/' . $video[2];
        $iframecontent = '<iframe src="' . $url . ' " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        
        $output .= $iframecontent;
        $output .= '</div></div>';
        
        return $output;
    }



    public function content($project, $typeofcontent){
        
        $output = '<div class="title-container">';

        $content = '<h2>' . $project[1] . '</h2>';

        if($typeofcontent === 'body'){
            $content = '<p>' . $project[2] . '</p>';

        }
        $output .= $content;
        $output .= '</div>';

        return $output;
    }



    public function menu($id, $title) {
        $output = '<li><a href="http://totoro.test/?id=' .  $id .'">'. $title .'</a></li>';
        return $output;
    }


}