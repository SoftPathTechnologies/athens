<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Event </strong> Speakers</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addSpeaker" class="btn btn-primary"><i data-feather="plus-circle"></i> Add New Speaker</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($speakers as $speaker) : ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" style="height: 250px;" src="<?php echo $this->crud_model->get_image_url('speakers', $speaker['id']) ?>" alt="Unsplash">
                        <div class="card-header text-center ">
                            <h4 class="mb-0"><?php echo $speaker['name'] ?></h4>
                            <p>Event Speaker</p>
                        </div>
                        <div class="card-body text-center">
                            <a href="#" class="btn btn-primary delete-speaker" data-speaker-id="<?php echo $speaker['encrypted_id'] ?>"><i data-feather="trash-2"></i> Remove Speakers</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>