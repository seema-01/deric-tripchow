<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4><?= isset($fetched_data[0]['id']) ? 'Update' : 'Add' ?> Waiter</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a class="home_breadcrumb" href="<?= base_url('admin/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Waiter</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <form class="form-horizontal form-submit-event" action="<?= base_url('waiter/waiter/register_waiter'); ?>" method="POST" id="add_waiter_form">
                <?php
                // print_r($fetched_data);
                if (isset($fetched_data[0]['id'])) {
                ?>
                    <input type="hidden" name="edit_restro_waiter" value="">
                    <input type="hidden" name="edit_id" value="<?= $fetched_data[0]['id'] ?>">
                    <input type="hidden" name="waiter_id" value="<?= $fetched_data[0]['waiter_id'] ?>">
                    <!-- <input type="hidden" name="old_address_proof" value="<?= $fetched_data[0]['address_proof'] ?>">
                    <input type="hidden" name="old_profile" value="<?= $fetched_data[0]['profile'] ?>">
                    <input type="hidden" name="old_national_identity_card" value="<?= $fetched_data[0]['national_identity_card'] ?>"> -->
                <?php
                }
                ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-body">
                                <h4>Waiter Details</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="name" class="col-sm-3 col-form-label">Name <span class='text-danger text-sm'>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="Waiter Name" name="name" value="<?= (isset($fetched_data[0]['username']) && !empty($fetched_data[0]['username'])) ? output_escaping($fetched_data[0]['username']) : "" ?>">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="address" class="col-sm-3 col-form-label">Address <span class='text-danger text-sm'>*</span></label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="address" placeholder="Enter Address" name="address"><?= (isset($fetched_data[0]['address']) && !empty($fetched_data[0]['address'])) ? output_escaping($fetched_data[0]['address']) : "" ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="profile" class="col-sm-4 col-form-label">Waiter Profile<span class='text-danger text-sm'>*</span></label>
                                            <div class="col-sm-10">
                                                <?php if (isset($fetched_data[0]['profile']) && !empty($fetched_data[0]['profile'])) { ?>
                                                    <span class="text-danger">*Leave blank if there is no change</span>
                                                <?php } ?>
                                                <input type="file" class="form-control" name="profile" id="profile" accept="image/*" />
                                            </div>
                                        </div>
                                        <?php if (isset($fetched_data[0]['profile']) && !empty($fetched_data[0]['profile'])) { ?>
                                            <div class="form-group ">
                                                <div class="mx-auto product-image"><a href="<?= base_url($fetched_data[0]['profile']); ?>" data-toggle="lightbox" data-gallery="gallery_restro"><img src="<?= base_url($fetched_data[0]['profile']); ?>" class="img-fluid rounded"></a></div>
                                            </div>
                                        <?php } ?>

                                        <div class="form-group ">
                                            <label for="national_identity_card" class="col-sm-3 col-form-label">GOV valid Id Proof <span class='text-danger text-sm'>*</span> </label>
                                            <div class="col-sm-10">
                                                <?php if (isset($fetched_data[0]['national_identity_card']) && !empty($fetched_data[0]['national_identity_card'])) { ?>
                                                    <span class="text-danger">*Leave blank if there is no change</span>
                                                <?php } ?>
                                                <input type="file" class="form-control" name="national_identity_card" id="national_identity_card" accept="image/*" />
                                            </div>
                                        </div>
                                        <?php if (isset($fetched_data[0]['national_identity_card']) && !empty($fetched_data[0]['national_identity_card'])) { ?>
                                            <div class="form-group">
                                                <div class="mx-auto product-image"><a href="<?= base_url($fetched_data[0]['national_identity_card']); ?>" data-toggle="lightbox" data-gallery="gallery_partner"><img src="<?= base_url($fetched_data[0]['national_identity_card']); ?>" class="img-fluid rounded"></a></div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="form-group ">
                                                <label for="mobile" class="col-sm-3 col-form-label">Mobile No. <span class='text-danger text-sm'>*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="mobile" placeholder="Waiter Mobile no." name="mobile" value="<?= (isset($fetched_data[0]['mobile']) && !empty($fetched_data[0]['mobile'])) ? output_escaping($fetched_data[0]['mobile']) : "" ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="form-group ">
                                                <label for="email" class="col-sm-3 col-form-label">Email Id <span class='text-danger text-sm'>*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" placeholder="Waiter Email Id" name="email" value="<?= (isset($fetched_data[0]['email']) && !empty($fetched_data[0]['email'])) ? output_escaping($fetched_data[0]['email']) : "" ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        if (!isset($fetched_data[0]['id'])) {
                                        ?>
                                            <div class="form-group ">
                                                <div class="form-group ">
                                                    <label for="password" class="col-sm-3 col-form-label">Password<span class='text-danger text-sm'>*</span></label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="form-group ">
                                                    <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password<span class='text-danger text-sm'>*</span></label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" value="">
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="submit" class="btn btn-info" id="submit_btn"><?= (isset($fetched_data[0]['id'])) ? 'Update Waiter' : 'Add Waiter' ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>