<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"><?php echo $active; ?></h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <?php
                            foreach ($histori as $key => $value) {
                                echo '
                                    <li class="breadcrumb-item"><a href="'.$key.'">'.$value.'</a></li>
                                ';
                            }
                        ?>
                        <li class="breadcrumb-item active"><?php echo $active; ?></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->