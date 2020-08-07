<?php

// ┌───────────────────────────────────────────────────────────┐ 
// │                                                           │░
// │                       Render class                        │░
// │                                                           │░
// │ This is an output class that displays things in the html. │░
// │                                                           │░
// └───────────────────────────────────────────────────────────┘░
//  ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

class render {

    // ┌───────────────────────────────────────────────────────────┐
    // │                                                           │
    // │  This outputs the hero video.                             │
    // │                                                           │
    // │  @param video - video ID from projects table              │
    // │                                                           │
    // └───────────────────────────────────────────────────────────┘
    public function video($video){
        $output = '<div></div><div class="video-container">';
    
        $url = 'https://www.youtube.com/embed/' . $video[2];
        $iframecontent = '<iframe src="' . $url . ' " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        
        $output .= $iframecontent;
        $output .= '</div></div>';
        
        return $output;
    }



    // ┌───────────────────────────────────────────────────────────┐
    // │                                                           │
    // │                                                           │
    // │  This outputs the text content.                           │
    // │                                                           │
    // │  @param project - this is an array of data columns from   │
    // │  the table of a single record                             │
    // │                                                           │
    // │  @param typeofcontent - string which can be title or body │
    // │                                                           │
    // │                                                           │
    // └───────────────────────────────────────────────────────────┘
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



    // ┌───────────────────────────────────────────────────────────┐
    // │                                                           │
    // │  This outputs the menu items.                             │
    // │                                                           │
    // │  @param id - ID number of the menu item                   │
    // │                                                           │
    // └───────────────────────────────────────────────────────────┘
    public function menu($id, $title) {
        $output = '<li><a href="http://totoro.test/?id=' .  $id .'">'. $title .'</a></li>';
        return $output;
    }


    
    public function carousel() {
        $output = '<div class="main-carousel" data-flickity=\'{ "cellAlign": "left", "contain": true, "groupCells": 2, "prevNextButtons": false}\'>';

        for($i=0; $i<10; $i++){
            $output .= '<div class="carousel-cell">image ' . $i . '</div>';
        }

        $output .= '</div>';

        return $output;

    }


}