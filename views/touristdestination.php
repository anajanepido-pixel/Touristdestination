<?php include '../nav/header.php'; ?>
<link rel="stylesheet" href="../assets/dist/css/style.css">
<?php
function safe($v)
{
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}

$carouselCount = (isset($carousel) && is_array($carousel)) ? count($carousel) : 0;
$heroCount     = (isset($hero) && is_array($hero)) ? count($hero) : 0;
?>
<br><br>

<!-- Carousel -->
<div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <?php if ($carouselCount > 0): ?>
        <!-- Indicators -->
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < $carouselCount; $i++): ?>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>"></button>
            <?php endfor; ?>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <?php foreach ($carousel as $idx => $item): ?>
                <?php
                $name  = $item[1] ?? '';
                $desc  = $item[2] ?? '';
                $image = $item[4] ?? '';
                $link  = $item[6] ?? '#';
                ?>
                <div class="carousel-item <?= $idx === 0 ? 'active' : '' ?>">
                    <img src="<?= safe($image) ?>" alt="" height="600" class="d-block w-100" style="object-fit:cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><b><?= safe($name) ?></b></h1>
                        <p><?= safe($desc) ?></p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="<?= !empty($link) ? safe($link) : '#' ?>" target="_blank">
                                Click for more!
                            </a>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if ($carouselCount > 1): ?>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        <?php endif; ?>

    <?php else: ?>
        <div class="p-5 text-center">No carousel items found.</div>
    <?php endif; ?>
</div>

<br>

<!-- Hero Sections -->
<div class="container">
    <?php if ($heroCount > 0): ?>
        <?php foreach ($hero as $index => $h): ?>
            <?php
            $hname  = $h[1] ?? '';
            $hdesc  = $h[2] ?? '';
            $himage = $h[3] ?? '';
            ?>
            <hr class="featurette-divider">
            <div class="row featurette align-items-center">
                <?php if ($index % 2 === 0): ?>
                    <!-- Text Left / Image Right -->
                    <div class="col-md-7">
                        <div class="text-center">
                            <h2 class="a"><b><i><?= safe($hname) ?></i></b></h2><br>
                            <p><?= safe($hdesc) ?></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="<?= safe($himage) ?>" class="img-fluid rounded shadow-lg hover-zoom"
                            style="width: 500px; height: 300px; object-fit: cover; transition: transform .3s ease;" alt="">
                    </div>
                <?php else: ?>
                    <!-- Image Left / Text Right -->
                    <div class="col-md-5 order-md-1">
                        <img src="<?= safe($himage) ?>" class="img-fluid rounded shadow-lg hover-zoom"
                            style="width: 500px; height: 300px; object-fit: cover; transition: transform .3s ease;" alt="">
                    </div>
                    <div class="col-md-7 order-md-2">
                        <div class="text-center">
                            <h2 class="a"><b><i><?= safe($hname) ?></i></b></h2><br>
                            <p><?= safe($hdesc) ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <hr class="featurette-divider">
    <?php else: ?>
        <div class="p-5 text-center">No hero sections found.</div>
    <?php endif; ?>


    <!-- Team Section -->
    <div class="row">
        <div class="col-lg-4 text-center">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://thumbs.dreamstime.com/b/print-339754759.jpg" alt="Alexa">
            <h2>Mr.Jan</h2>
            <p>Founder</p>
            <p>Mr.Jan is the person who establishes the group of Philippine TouristD.</p>
        </div>
        <div class="col-lg-4 text-center">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://static.vecteezy.com/system/resources/previews/004/439/690/non_2x/doodle-girl-character-drawing-vector.jpg" style="border:1px solid gray;" alt="Jared">
            <h2>Ms.Maine</h2>
            <p>Executive Directo</p>
            <p>Ms.Maine is the senior manager of the Philippine TouristD group, usually a non-profit, who is responsible for overseeing day-to-day operations and ensuring that the organization meets its goals.They manage staff, implement programs, and often report to a board of directors.</p>
        </div>
        <div class="col-lg-4 text-center">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://img.pikbest.com/origin/06/48/72/059pIkbEsTrz7.jpg!w700wp" style="border:1px solid gray;" alt="Mika">
            <h2>Ms.Jane</h2>
            <p>Manager</p>
            <p>Ms.Jane is the person that responsible for controlling or administering all or part of a company, organization, or project. They oversee the activities and performance of others, often making key decisions and directing resources to achieve specific goals.</p>
        </div>
    </div>
</div>
<br><br>

<?php include '../nav/footer.php'; ?>