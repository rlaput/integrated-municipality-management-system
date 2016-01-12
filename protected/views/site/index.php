<?php ?>
<script language="javascript">
    document.getElementById('menu_home').className = 'active';
</script>


<div class="page-header">
    <h1>Barangay Talamban <small>Green, Clean, and Healthy</small></h1>
</div>

<div class="carousel-container">
    <div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
        <ol class="carousel-indicators">
            <li data-target="#this-carousel-id" data-slide-to="0" class="active"></li>
            <li data-target="#this-carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#this-carousel-id" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"><!-- class of active since it's the first item -->
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/carousel/image1.JPG" alt="Barangay Talamban Hall" class="carousel-image">
                <div class="carousel-caption">
                    <h1>Barangay Talamban Hall</h1>
                    <p>This is the Barangay Talamban Hall</p>
                </div>
            </div>
            <div class="item"><!-- class of active since it's the first item -->
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/carousel/image2.JPG" alt="Houses in Barangay Talamban" class="carousel-image">
                <div class="carousel-caption">
                    <h1>Houses in Barangay Talamban</h1>
                    <p>Sample homes in Barangay Talamban</p>
                </div>
            </div>
            <div class="item"><!-- class of active since it's the first item -->
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/carousel/image3.JPG" alt="Houses in Barangay Talamban" class="carousel-image">
                <div class="carousel-caption">
                    <h1>View from Barangay Talamban</h1>
                    <p>Sample view from Barangay Talamban</p>
                </div>
            </div>
        </div><!-- /.carousel-inner -->
        <!-- Controls -->
        <a class="left carousel-control" href="#this-carousel-id" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#this-carousel-id" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div><!-- /.carousel -->
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 3000
        })
    });
</script>
