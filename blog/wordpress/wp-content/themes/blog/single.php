<?php get_header(); ?>
<div class="container" id="blog">
</div>
<div class="container" style="border-bottom:#F0F0F0 1px solid">
	<h1>
		 <center><strong><font color="#77B5FE">BLOG</font></strong></center>
	</h1>
</div>
<div class="container-fluid" id="blogContainer">
	<div class="row" id="blogRow">
		<div id="blogBack">
			<a href="http://smart2.icoolshow.net/blog/" class="blogBackLink"><i class="fas fa-arrow-left"></i>  Return to main page</a>
		</div>
	</div>

    <?php
		$count = 1;
		while(have_posts()) : the_post();?>
		<div class="row" id="blogRow">
			<div class="postBlock">
				<div id="blogContent">
					<h2>
						<?php the_title();?>
					</h2>
					<span class="blogDate"><?php echo get_the_date();?></span>
					<br>
					<span class="summary"><?php the_content();?></span>
				</div>
			</div>
		</div>
        <?php
			endwhile;
		?>
        <div class="clearFix">
        </div>
		<hr class="blog-hr">
        <div class="row" id="blogRow">
			
            <div class="col-md-2" id="authorColumn">
                <?php echo get_avatar(get_the_author_email(), 50);?>
            </div>
            <div class="col-md-10">
                <p>About the author</p>
                <?php the_author(); ?>
                <br>
                <?php the_author_description(); ?>
            </div>
			
        </div>
			<hr class="blog-hr">
		<div class="row" id="blogLike">
			<h2>Liked this post? Check out these posts</h2>
		</div>
        <?php echo randomPost(); ?>
</div>



<?php get_footer(); ?>
