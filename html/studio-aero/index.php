<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="scene_menu">
	<ul>	
		<li class="scene_sample">撮影サンプル>>></li>
		<li><a href="#birthday">バースデー</a></li>
		<li><a href="#half_birthday">ハーフ バースデー</a></li>
		<li><a href="#sft">七五三</a></li>
		<li><a href="#family">ファミリー写真</a></li>
		<li><a href="#omiya">お宮参り</a></li>
		<li><a href="#ceremony">入園入学 卒園卒業</a></li>
		<li><a href="#maternity">マタニティ</a></li>
		<li><a href="#newborn">ニューボーン</a></li>
	</ul>
</div>

<div class="wrap">
	<div class="main_content">
		<div class="main_wrap">
			<div class="introduction">
				<h2 class="mb20">Introduction <span class="h2_sub">スタジオ紹介</span></h2>
				<div class="youtube">
					<iframe width="853" height="480" src="https://www.youtube.com/embed/jB6sFqjR5PI?vq=highres&amp;autoplay=1&amp;loop=1&amp;rel=0&amp;showinfo=0&amp;playlist=jB6sFqjR5PI" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="news">
				<h2 class="mb20">News & Info <span class="h2_sub">おしらせ</span></h2>
				<ul>
					<?php $args = array(
    'numberposts' => 6, //表示する記事の数
    'post_type' => 'news' //投稿タイプ名
    // 条件を追加する場合はここに追記
    );
					$customPosts = get_posts($args);
					if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
					?>
					<li><a href="<?php echo get_permalink(); ?>"><?php the_date(); ?>&nbsp;<span class="fz18"><?php the_title(); ?></span></a></li>
				<?php endforeach; ?>
			<?php else : //記事が無い場合 ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif;
			wp_reset_postdata(); //クエリのリセット ?>
		</ul>
	</div>
</div>

<div id="birthday">
	<h2 class="mb20">Birthday <span class="h2_sub">バースデー</span></h2>
	<div class="cont_wrap">
		<div class="cont_l">
			<div class="thumbnail" style="position:relative;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_5.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_5.jpg" width="100" height="40" alt="Birthday: image 1 0f 9 thumb" /><img class="plus" src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a>
				<div class="thumb_title">
					<p>Photo</p>
				</div>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_3.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_3.jpg" width="100" height="40" alt="Birthday: image 2 0f 9 thumb" /></a>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_4.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_4.jpg" width="100" height="40" alt="Birthday: image 3 0f 9 thumb" /></a>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_6.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_6.jpg" width="100" height="40" alt="Birthday: image 4 0f 9 thumb" /></a>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_7.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Birthday_7.jpg" width="100" height="40" alt="Birthday: image 5 0f 9 thumb" /></a>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_8.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_8.jpg" width="100" height="40" alt="Birthday: image 6 0f 9 thumb" /></a>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_9.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_9.jpg" width="100" height="40" alt="Birthday: image 7 0f 9 thumb" /></a>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_10.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_10.jpg" width="100" height="40" alt="Birthday: image 8 0f 9 thumb" /></a>
			</div>
			<div class="thumbnail" style="display: none;">
				<a href="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_11.jpg" rel="lightbox[Birthday]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Birthday_11.jpg" width="100" height="40" alt="Birthday: image 9 0f 9 thumb" /></a>
			</div>
		</div>
		<div class="cont_c">
			<div style="position:relative;height:0;padding-bottom:67%"><iframe src="https://www.youtube.com/embed/eR6_jUSfX5o?vq=highres&amp;rel=0&amp;showinfo=0" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
			<div class="thumb_title">
				<p>Making Movie</p>
			</div>
		</div>
		<div class="cont_r">
			<div style="position:relative;height:0;padding-bottom:67%"><iframe src="https://www.youtube.com/embed/ZVYoqGz6dVw?vq=highres&amp;rel=0&amp;showinfo=0" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
			
			<div class="thumb_title">
				<p>Premium Movie</p>
			</div>
		</div>
	</div>
	<div class="top_category_wrap">
		<div class="category_text_left">
			<p>お子さんの誕生日は毎年うれしいものですが、初めての誕生日は特別なものです。<br>
				1年間の子育てを振り返り感動もひとしおでしょう。<br>
				特別な日に、「一生の記念に残したくなる」、そんな写真を残しませんか。</p><a class="readmore" href="/category05/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>

	<div id="half_birthday">
		<h2 class="mb20">Half Birthday <span class="h2_sub">ハーフ バースデー</span></h2>
		<div class="cont_wrap">
			<div class="cont_l">
				<div class="thumbnail" style="position:relative;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_9.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_9.jpg" width="100" height="40"/><img class="plus" src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a>
					<div class="thumb_title">
						<p>Photo</p>
					</div>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_10.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_10.jpg" width="100" height="40" /></a>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_11.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_11.jpg" width="100" height="40" /></a>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/04/HalfBirthday_12.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/HalfBirthday_12.jpg" width="100" height="40" /></a>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_1.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_1.jpg" width="100" height="40" /></a>
				</div>	
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_2.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_2.jpg" width="100" height="40" /></a>
				</div>											
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_3.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_3.jpg" width="100" height="40" /></a>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_4.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_4.jpg" width="100" height="40" /></a>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_5.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_5.jpg" width="100" height="40" /></a>
				</div>				
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_6.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_6.jpg" width="100" height="40" /></a>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_7.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_7.jpg" width="100" height="40"/></a>
				</div>
				<div class="thumbnail" style="display: none;">
					<a href="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_8.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/HalfBirthday_8.jpg" width="100" height="40" /></a>
				</div>

			</div>
			<div class="cont_c">
				<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg" style="height:94%;"></a>
				<div class="thumb_title">
					<p>Making Movie</p>
				</div>
			</div>
			<div class="cont_r">
				<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg" style="height:94%;"></a>
				<div class="thumb_title">
					<p>Premium Movie</p>
				</div>
			</div>
		</div>
		<div class="top_category_wrap">
			<div class="category_text_left">
				<p>子どもの成長過程で変化の大きいこの期間、日々すくすくと成長著しい赤ちゃんを撮影してはいかがでしょうか。<br>
					時期的には６ヶ月位ですが、寝返りからハイハイが出来るようになるタイミングで撮影するとよいでしょう。</p><a class="readmore" href="/category04/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

		<div id="sft">
			<h2 class="mb20">7-5-3 <span class="h2_sub">七五三</span></h2>
			<div class="cont_wrap">
				<div class="cont_l">
					<div class="thumbnail" style="position:relative;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_1.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/753_thumbnail.jpg" width="100" height="40" alt="Plants: image 1 0f 10 thumb" /><img class="plus" src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a>
						<div class="thumb_title">
							<p>Photo</p>
						</div>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_2.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/753_2.jpg" width="100" height="40" alt="Plants: image 2 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_3.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/753_3.jpg" width="100" height="40" alt="Plants: image 3 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_4.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/753_4.jpg" width="100" height="40" alt="Plants: image 4 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_5.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/753_5.jpg" width="100" height="40" alt="Plants: image 5 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_6.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/753_6.jpg" width="100" height="40" alt="Plants: image 6 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_7.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/753_7.jpg" width="100" height="40" alt="Plants: image 7 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/02/753_8.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/753_8.jpg" width="100" height="40" alt="Plants: image 8 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/04/753_9.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/753_9.jpg" width="100" height="40" alt="Plants: image 9 0f 10 thumb" /></a>
					</div>
					<div class="thumbnail" style="display: none;">
						<a href="//studio-aero.jp/wp-content/uploads/2017/04/753_10.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/753_10.jpg" width="100" height="40" alt="Plants: image 10 0f 10 thumb" /></a>
					</div>
				</div>
				<div class="cont_c">
					<div style="position:relative;height:0;padding-bottom:67%"><iframe src="https://www.youtube.com/embed/aHkLqQPxl8M?vq=highres&amp;rel=0&amp;showinfo=0" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
					<div class="thumb_title">
						<p>Making Movie</p>
					</div>
				</div>
				<div class="cont_r">
					<div style="position:relative;height:0;padding-bottom:67%"><iframe src="https://www.youtube.com/embed/HWcl7PrIdQw?vq=highres&amp;rel=0&amp;showinfo=0" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
					<div class="thumb_title">
						<p>Premium Movie</p>
					</div>
				</div>
			</div>
			<div class="top_category_wrap">
				<div class="category_text_left">
					<p>七五三は、お子さんの成長を祝い、健康を願う、日本の伝統的な行事です。<br>
						数え年で男の子は三歳と五歳、女の子は三歳と七歳でお祝いをします。<br>
						もともと関東圏でのみで行われる、地方の風習でした。</p><a class="readmore" href="/category06/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>

			<div id="family">
				<h2 class="mb20">Family <span class="h2_sub">ファミリー写真</span></h2>
				<div class="cont_wrap">
					<div class="cont_l">
						<div class="thumbnail" style="position:relative;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/03/Nakatsuka_Family_011.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/03/Nakatsuka_Family_011.jpg" width="100" height="40" alt="Plants: image 1 0f 9 thumb" /><img class="plus" src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a>
							<div class="thumb_title">
								<p>Photo</p>
							</div>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_4.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_4.jpg" width="100" height="40" alt="Plants: image 2 0f 9 thumb" /></a>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_5.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_5.jpg" width="100" height="40" alt="Plants: image 3 0f 9 thumb" /></a>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_6.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_6.jpg" width="100" height="40" alt="Plants: image 4 0f 9 thumb" /></a>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_7.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_7.jpg" width="100" height="40" alt="Plants: image 5 0f 9 thumb" /></a>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_8.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_8.jpg" width="100" height="40" alt="Plants: image 6 0f 9 thumb" /></a>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_9.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_9.jpg" width="100" height="40" alt="Plants: image 7 0f 9 thumb" /></a>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_10.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_10.jpg" width="100" height="40" alt="Plants: image 8 0f 9 thumb" /></a>
						</div>
						<div class="thumbnail" style="display: none;">
							<a href="//studio-aero.jp/wp-content/uploads/2017/04/Family_11.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Family_11.jpg" width="100" height="40" alt="Plants: image 9 0f 9 thumb" /></a>
						</div>
					</div>
                    <div class="cont_c">
					<div style="position:relative;height:0;padding-bottom:67%"><iframe src="https://www.youtube.com/embed/jDpm4BmpM5A?vq=highres&amp;rel=0&amp;showinfo=0" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
					<div class="thumb_title">
						<p>Making Movie</p>
					</div>
				</div>                    
					<div class="cont_r">
						<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg" style="height:94%;"></a>
						<div class="thumb_title">
							<p>Premium Movie</p>
						</div>
					</div>
				</div>
				<div class="top_category_wrap">
					<div class="category_text_left">
						<p>お子さんの成長、また家族の記念日に、想い出として残したい家族写真。<br>
							フォトスタジオや写真館で特別な一枚を撮影するのもいいですね。<br>
							ご家族のスケジュールが合わなかったり、混み合っていたりとなかなか撮影時期を選ぶのが難しいかもしれません。</p><a class="readmore" href="/category08/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>				

				<div id="omiya">
					<h2 class="mb20">Shrine visit <span class="h2_sub">お宮参り（初宮参り）</span></h2>
					<div class="cont_wrap">
						<div class="cont_l">
							<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg"></a>
							<div class="thumb_title">
								<p>Photo</p>
							</div>
						</div>
						<div class="cont_c">
							<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg"></a>
							<div class="thumb_title">
								<p>Making Movie</p>
							</div>
						</div>
						<div class="cont_r">
							<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg"></a>
							<div class="thumb_title">
								<p>Premium Movie</p>
							</div>
						</div>
					</div>
					<div class="top_category_wrap">
						<div class="category_text_left">
							<p>お宮参りは日本古来の習慣で、生まれたばかりの赤ちゃんを住んでいる土地の神様に紹介するとともに、その成長を見守っていただきたいとお願いする儀式です。<br>
								お参りする時期はおよそ生後１ヶ月から３ヶ月の間で、一般的には30日が経過する頃の都合がつく日が多くなっています。</p><a class="readmore" href="/category03/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div id="ceremony">
						<h2 class="mb20">Ceremony <span class="h2_sub">入園入学 卒園卒業</span></h2>
						<div class="cont_wrap">
							<div class="cont_l">
								<div class="thumbnail" style="position:relative;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_5.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_3.jpg" width="100" height="40" alt="Plants: image 1 0f 8 thumb" /><img class="plus" src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a>
									<div class="thumb_title">
										<p>Photo</p>
									</div>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_1.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_1.jpg" width="100" height="40" alt="Plants: image 2 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_2.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_2.jpg" width="100" height="40" alt="Plants: image 3 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_3.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_5.jpg" width="100" height="40" alt="Plants: image 4 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_4.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_4.jpg" width="100" height="40" alt="Plants: image 5 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_6.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_6.jpg" width="100" height="40" alt="Plants: image 6 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_7.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_7.jpg" width="100" height="40" alt="Plants: image 7 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_8.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/Ceremony_8.jpg" width="100" height="40" alt="Plants: image 8 0f 8 thumb" /></a>
								</div>
							</div>
							<div class="cont_c">
								<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg" style="height:94%;"></a>
								<div class="thumb_title">
									<p>Making Movie</p>
								</div>
							</div>
							<div class="cont_r">
								<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg" style="height:94%;"></a>
								<div class="thumb_title">
									<p>Premium Movie</p>
								</div>
							</div>
						</div>
						<div class="top_category_wrap">
							<div class="category_text_left">
								<p>新しい世界への始まり、ドキドキとワクワクがいっぱいで一歩踏み出すお子さんのキラキラとした表情を写真におさめたいですね。<br>
									人生の節目をご家族とともに、お子さんの成長した晴れ姿をしっかりと写真で残しておきたいとお考えになる方も多いのではないでしょうか。</p><a class="readmore" href="/category07/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>


						<div id="maternity">
							<h2 class="mb20">Maternity <span class="h2_sub">マタニティ</span></h2>
							<div class="cont_wrap">
								<div class="cont_l">
										<div class="thumbnail" style="position:relative;">
											<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_1.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key."><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_1.jpg" width="100" height="40" alt="Plants: image 1 0f 8 thumb" /><img class="plus" src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a>
									<div class="thumb_title">
										<p>Photo</p>
									</div></div>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_2.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_2.jpg" width="100" height="40" alt="Plants: image 2 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_3.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_3.jpg" width="100" height="40" alt="Plants: image 3 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_4.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_4.jpg" width="100" height="40" alt="Plants: image 4 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_5.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_5.jpg" width="100" height="40" alt="Plants: image 5 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_6.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_6.jpg" width="100" height="40" alt="Plants: image 6 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_7.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_7.jpg" width="100" height="40" alt="Plants: image 7 0f 8 thumb" /></a>
								</div>
								<div class="thumbnail" style="display: none;">
									<a href="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_8.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/04/Maternity_8.jpg" width="100" height="40" alt="Plants: image 8 0f 8 thumb" /></a>
								</div>
								<div class="cont_c">
					<div style="position:relative;height:0;padding-bottom:67%"><iframe src="https://www.youtube.com/embed/QKG7iM9FYmg?vq=highres&amp;rel=0&amp;showinfo=0" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
                            <div class="thumb_title">
                                <p>Making Movie</p>
                            </div>
							</div>
								<div class="cont_r">
									<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg"></a>
									<div class="thumb_title">
										<p>Premium Movie</p>
									</div>
								</div>
							</div>
							<div class="top_category_wrap">
								<div class="category_text_left">
									<p>限られた期間、女性の神秘的な美しさ、産まれてくる新しい家族への思いや絆を写真に残しませんか。<br>
										妊娠中のおなかがふっくらとなった姿を撮った写真は、海外ではMaternity photography（マタニティフォトグラフィー）として、また専門のカメラマン（フォトグラファー）がいるほど浸透しています。</p><a class="readmore" href="/category01/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>

							<div id="newborn">
								<h2 class="mb20">New Born <span class="h2_sub">ニューボーン</span></h2>
								<div class="cont_wrap">
									<div class="cont_l">
										<div class="thumbnail" style="position:relative;">
											<a href="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000009.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000009.jpg" width="100" height="40" alt="Plants: image 1 0f 5 thumb" /><img class="plus" src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a>
											<div class="thumb_title">
												<p>Photo</p>
											</div>

										</div>
										<div class="thumbnail" style="display: none;">
											<a href="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000001.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000001.jpg" width="100" height="40" alt="Plants: image 2 0f 5 thumb" /></a>
										</div>
										<div class="thumbnail" style="display: none;">
											<a href="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000057.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000057.jpg" width="100" height="40" alt="Plants: image 3 0f 5 thumb" /></a>
										</div>
										<div class="thumbnail" style="display: none;">
											<a href="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000034.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000034.jpg" width="100" height="40" alt="Plants: image 4 0f 5 thumb" /></a>
										</div>
										<div class="thumbnail" style="display: none;">
											<a href="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000044.jpg" rel="lightbox[plants]" title="Alternatively you can press the right arrow key." ><img src="//studio-aero.jp/wp-content/uploads/2017/02/NewBorn_10000044.jpg" width="100" height="40" alt="Plants: image 5 0f 5 thumb" /></a>
										</div>
									</div>
									<div class="cont_c">
										<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/sample.jpg" style="height:94%;"></a>
										<div class="thumb_title">
											<p>Making Movie</p>
										</div>
									</div>
									<div class="cont_r">
										<div style="position:relative;height:0;padding-bottom:67%"><iframe src="https://www.youtube.com/embed/GNU4O1k8D6U?vq=highres&amp;rel=0&amp;showinfo=0" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
										<div class="thumb_title">
											<p>Premium Movie</p>
										</div>
									</div>
								</div>
								<div class="top_category_wrap">
									<div class="category_text_left">
										<p>今ママたちの間で流行っている、生まれて間もないベビーの写真「ニューボーンフォト」。<br>
											赤ちゃんにとって最初の記念撮影で、アメリカなど海外では当たり前のように撮られている、生まれて数週間の赤ちゃんの写真です。</p><a class="readmore" href="/category02/">Readmore <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
							</div>

						</main><!-- #main -->
					</div><!-- #primary -->

				</div><!-- .wrap -->

				<?php get_footer();