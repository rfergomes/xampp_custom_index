<div id="wrapper">
    <div class="hero">
        <div class="row">
            <div class="large-12 columns">
                <h1><img src="/dashboard/images/xampp-logo.svg" /><span>Projetos</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="row-fluid">
                <ul class="thumbnails">
                    <?php
                    $path = "..";
                    $list = scandir($path);
                    foreach ($list as $value) : ?>
                        <?php if ($value != '..' &&  $value != ".") : ?>
                            <?php if (is_dir($path . '/' . $value)) : ?>
                                <li class="card">
                                    <a href="https://localhost/<?= $value ?>" class="thumbnail" style="background:white"><?= $value ?></a>
                                </li>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>