<?php if (strpos($_SERVER["PHP_SELF"], basename(__FILE__)) > 0) header("location:" . $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"]);?><div class='container-fluid'><div class='row'><div class='col-12'><div class='card shadow-sm mb-3'><div class='modal fade' id='deleteCategories' tabindex='-1'><div class='modal-dialog'><div class='modal-content'><div class='modal-body'><a class='close float-right' data-dismiss='modal' aria-label='Close'><i class='far fa-times-circle text-danger fa-2x'></i></a><div class='text-center pt-5 text-danger'><i class='fas fa-trash-alt fa-5x '></i><h1 class='w-100 text-danger'>Are you sure?</h1><p class='mt-3'>Once Deleted this Entry From Categories it cannot be retreived again.</p><input type='hidden' name='categoriesDeleteId'><div class='text-center mt-3'><a data-dismiss='modal' class='btn btn-sm btn-white text-danger'><i class='fas fa-times'></i> I Changed My Mind!</a><button class='btn btn-sm btn-danger' name='deleteCategories'><i class='fas fa-check'></i> Yes, Delete It.</button></div></div></div></div></div></div><div id='manageCategories' style='display: none'><div class='container-fluid'><div class='row my-3'><div class='col-12'><h3 class='h3'><modalTitle class='h1 mb-md-0 mb-sm-3 text-center mb-4'> </modalTitle> <a class='closeManageCategories float-right'><i class='far fa-times-circle fa-2x'></i></a></h3><hr class='w-100 mt-4'></div><div class='col-12'><form method='POST' class='container-fluid complete-form-package' enctype='multipart/form-data' id='manageCategoriesForm'><div class='row'><input type='hidden' name='modifyingCategories'> <div class='col-sm-12 col-md-4 col-lg-4 col-xl-4'><label class='form-control-label' for='image'>Image <sup class='text-small'><i class='text-danger fas fa-star-of-life'></i></sup></label><div class='imageUploadContainer'><img onerror="this.onerror=null;this.src='assets/images/not-found.svg'" class='img-fluid'><div class='input-group'><div class='input-group-prepend'><span class='input-group-text' id='image'>Image</span></div><div class='custom-file'><input required data-max-size='0' accept='jpeg,pdf,jpg' type='file' class='custom-file-input imageUploader' id='image' name='image'><label class='custom-file-label' for='image'>Image</label></div></div></div></div><div class='col-sm-12 col-md-4 col-lg-4 col-xl-4'><div class='md-form '><label class='form-control-label' for='name'>Name <sup class='text-small'><i class='text-danger fas fa-star-of-life'></i></sup></label><input id='name' type='text' name='name' required class=' form-control validate'></div></div> <div class='col-lg-12'><button class='btn btn-lg btn-primary btn-block mt-4' name='manageCategories' type='submit'></button></div></div></form></div></div></div></div></div></div></div></div>