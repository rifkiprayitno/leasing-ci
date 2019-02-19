        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><?php echo $breadcrumb_active; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <?php
                                        foreach ($breadcrumb as $key => $value) {
                                            echo '
                                                <li class="breadcrumb-item"><a href="'.$key.'">'.$value.'</a></li>
                                            ';
                                        }
                                    ?>
                                    <li class="active"><?php echo $breadcrumb_active; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        