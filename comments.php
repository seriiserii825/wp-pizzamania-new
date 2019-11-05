<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pizzamania
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

                            <!--image-heading2-->
                            <div class="image-heading3">
                                <h2>09 COMMENTS :</h2>
                                <div class="comment-block">
                                    <div class="comment">
                                        <img src="images/profile-pic.png" tppabs="http://www.rewebso.com/domnoo/web/images/profile-pic.png" alt="">
                                    </div>
                                    <div class="comment-new">
                                        <ul>
                                            <li><i class="flaticon-profile"></i>Harry T</li>
                                            <li><i class="flaticon-calendar"></i>15/06/2017</li>
                                        </ul>
                                        <a href="#">REPLY</a>
                                        <p>Sed scelerisque, ipsum in rutrum gravida, odio eros maximus erat, varius pretium tellus eros et quam. Vivamus interdum ligula</p>
                                    </div>
                                </div>
                            </div>
                            <!--image heading3-->

                            <div class="leave-reply image-heading3">
                                <h2>LEAVE AND REPLY :</h2>
                                <form>
                                    <div class="form-group nm">
                                        <input type="text" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="form-group nm">
                                        <input type="text" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Write your comment.." class="form-control"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn1 stl2">POST COMMENT</button>
                                    </div>
                                </form>
                            </div>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'pizzamania' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
