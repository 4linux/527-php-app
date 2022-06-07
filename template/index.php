<script type="text/javascript">
    $(function() {
        $('.carousel').carousel({
            interval: 5000
        });
    });
</script>

<div class="carousel slide" id="myCarousel">
    <div class="carousel-inner">
      <?php for( $x = 1; $x <= 4; $x++ ){ ?>
			<div class="item <?php echo ( $x == 1 ) ? ' active' : '' ?>">
				<center><img src="include/banner/<?php echo $x ?>.jpg"></center>
			</div>
		<?php } ?>
    </div>
    <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
    <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
</div>

<div class="row">
    <div class="span12">
        <h1>Dexter</h1>
        <p>
            <?php echo encurtar( file_get_contents( 'sobre.txt' ) ).'...' ?>
        </p>
        <p>
            <a href="sobre.php" class="btn btn-primary btn-large">
                Saiba mais
            </a>
        </p>
    </div>
</div>
<hr/>
