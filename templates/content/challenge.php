<?php
    $start_time = date_create('2019-05-11');
    $current_time = date_create();
    $end_time = date_create('2019-06-11');
    $time_diff_full = date_diff($start_time, $end_time);
    $time_diff_now = date_diff($current_time, $end_time);
    $progress = round(((int)$time_diff_now->format('%a') / (int)$time_diff_full->format('%a')) * 100, 2);
?>
<section id="challenge">
    <h2 class="section-headline">Month Challenge</h2>
    <p class="description">The monthly challenge is a thing i made for myself to give me deadlines. I will try to release something every month. What will be released could be anything. For example a website, a game demo just a update or something completly different i wanted to create.</p>
    <div class="inner">
        <div class="current">
            <h3>Current Month</h3>
            <p class="teaser">This month im working on a beta version of a little Clicker Game</p>
            
            <div class="progress">
                <div class="box start">
                    <p>Start<br/><?php echo($start_time->format('d.m.Y')); ?></p>
                </div>
                <div id="month-progress" class="progressbar" progress="<?php echo($progress); ?>">
                    <div class="filler" style="width: <?php echo($progress); ?>%;"></div>
                    <span><?php echo($progress); ?>%</span>
                </div>
                <div class="box end">
                    <p>End<br/><?php echo($end_time->format('d.m.Y')); ?></p>
                </div>
            </div>

        </div>
        <div class="past">
            <h3>Past Months</h3>
            <div class="past-list">

                <div class="element">
                    <div class="wrap">
                        <p>June</p>
                        <p>morhero.de</p>
                        <a href="">See more</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
</section>