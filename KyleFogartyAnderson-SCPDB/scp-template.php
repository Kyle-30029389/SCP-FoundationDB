<?php 
    require_once( 'db-connect.php' );
    include("common-top.php");
    include("nav.php"); 
    include("background.php"); 
    
    
    $query = "SELECT * FROM data WHERE id = '".$_GET['id']."'";
    

    $all_posts = mysqli_query( $link, $query ) 
    or die( mysqli_error( $link ) ); 


while( $blog_post = mysqli_fetch_assoc( $all_posts ) )
{ 
    //print('<h1>'.$blog_post['id'].'</h1>');
    print('
        <div class="pagecontent">
                <div class="header">
                    <h1><b>Item #: </b>'.$blog_post['item_no'].'</h1>
                    <h2><b>Object Class: </b>'.$blog_post['object_class'].'</h2>
                </div>
        ');

        if(strlen($blog_post['header_1']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_1'].'</button>
            <div class="content">'.$blog_post['content_1'].'</div>
            ');
        }

        if(strlen($blog_post['header_2']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_2'].'</button>
            <div class="content">'.$blog_post['content_2'].'</div>
            ');
        }

        if(strlen($blog_post['header_3']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_3'].'</button>
            <div class="content">'.$blog_post['content_3'].'</div>
            ');
        }

        if(strlen($blog_post['header_4']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_4'].'</button>
            <div class="content">'.$blog_post['content_4'].'</div>
            ');
        }

        if(strlen($blog_post['header_5']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_5'].'</button>
            <div class="content">'.$blog_post['content_5'].'</div>
            ');
        }

        if(strlen($blog_post['header_6']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_6'].'</button>
            <div class="content">'.$blog_post['content_6'].'</div>
            ');
        }

        if(strlen($blog_post['header_7']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_7'].'</button>
            <div class="content">'.$blog_post['content_7'].'</div>
            ');
        }

        if(strlen($blog_post['header_8']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_8'].'</button>
            <div class="content">'.$blog_post['content_8'].'</div>
            ');
        }

        if(strlen($blog_post['header_9']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_9'].'</button>
            <div class="content">'.$blog_post['content_9'].'</div>
            ');
        }

        if(strlen($blog_post['header_10']) > 0){
            print('
            <button type="button" class="collapsible">'.$blog_post['header_10'].'</button>
            <div class="content">'.$blog_post['content_10'].'</div>
            ');
        }
                

                
            
}
include("common-bottom.php"); 
    

    
?>