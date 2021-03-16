<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php bloginfo( 'name' ); ?>
<?php wp_title(); ?></title>

<link href='http://fonts.googleapis.com/css?family=Acme' 
rel='stylesheet' type='text/css'>
<link href="https:/netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" 
rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head(); ?>
</head>


<!--bodyの要素を抽出-->
<body <?php body_class(); ?>>
    
    <header>
        <div class="siteinfo">
            <div class="container"> 
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>
            <p><?php bloginfo( 'description' ); ?></p>
        </div>
    </header>
    
    
    
    <div class="container">            
        <!--　if()で何個入ってるか確認　whileで一つ一つ取り出す　-->
        <!--　the_postで処理の回数をカウント　-->
        <?php if(have_posts()): while(have_posts()):
                the_post(); ?>
                
                <article <?php post_class(); ?>>
                    
                    <h1><?php the_title(); ?></h1>    
                    <div class="postinfo">
                        <time datetime="<?php echo get_the_date('Y-m-d') ?>">
                            <i class="fa fa-clock-o"></i>
                            <?php echo get_the_date(); ?>
                        </time>
                        
                        
                        <span class="postcat">
                <i class="fa fa-folder-open"></i>
                <?php the_category(','); ?>
            </span>
            <?php the_content(); ?>
            <div>
                <?php if( is_single() ): ?>
                    <!-- pagenav -->    
                    <div class="pagenav">
                        <span class="old">
                            <?php previous_posts_link( '%link',
                '<i class="fa fa-chevron-circle-left"></i> %title' ); ?>
             </span>
             
             <span class="new">
                 <?php next_posts_link( '%link',
                '%title <i class="fa fa-chevron-circle-right"></i> %title' ); ?>
              </span>
            </div>  
            <!-- pagenav終 -->    
            <?php endif; ?>
        </article>
        
        <?php endwhile; endif; ?>
        
        <?php if ( $wp_query->max_num_pages > 1 ): ?>
            <div class="pagenav">
                <span class="old">
                    <?php next_posts_link( '<i class="fa fa-chevron-circle-left"></i>前ページ' ); ?>
                </span>  　　  
                
                <span class="new">
                    <?php previous_posts_link( '次ページ　<i class="fa fa-chevron-circle-right"></i>' ); ?>
                </span>  　　  
            </div>
            <?php endif; ?>
        </div><!--container-->
        <footer>
            <div class="container">
                <small>Copyright& copy  <?php bloginfo( 'name' ); ?>
            </small>
        </div>
    </footer>
    
    
    
    
    
<?php wp_footer(); ?>
</body>
</html>





























    
    

