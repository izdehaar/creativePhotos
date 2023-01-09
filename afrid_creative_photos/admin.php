<?php require('required/header.php'); ?><main><div class='container-fluid' id='AdminContainer'><div class='card shadow-sm mb-3 mainCard'><div class='card-header d-flex flex-column flex-md-row align-items-center justify-content-md-between'><h3 class='h1 mb-md-0 mb-sm-3 text-center mb-4'>Admin </h3><div class='actions text-center'><button class='btn btn-warning btn-special resetSearch text-white '>Reset <i class='fas fa-sync-alt'></i></button><button class='btn btn-success exportViewOnly'>Excel <i class='far fa-file-excel'></i></button></div></div><div class='card-body px-4'><table class='table w-100 table-striped table-bordered table-hover align-items-center table-sm listOfAdmin dt-responsive data-feed-crud'><thead class='thead-light'><tr><th>Sr #</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Role</th><th>Created On</th></tr><tr class='noExl'><th class='basic-headers noExl'>Sr #</th><th class='hasInput'> <input placeholder='&#x1F50D;  First Name' type='text' accesskey=1 autocomplete='off' class='form-control hitSearch' id='searchFname'></th><th class='hasInput'> <input placeholder='&#x1F50D;  Last Name' type='text' accesskey=2 autocomplete='off' class='form-control hitSearch' id='searchLname'></th><th class='hasInput'> <input placeholder='&#x1F50D;  Email' type='text' accesskey=3 autocomplete='off' class='form-control hitSearch' id='searchEmail'></th><th class='hasInput'> <input placeholder='&#x1F50D;  Role' type='text' accesskey=4 autocomplete='off' class='form-control hitSearch' id='searchRole'></th><th class='hasInput'> <input placeholder='&#x1F50D;  Created On' type='text' accesskey=5 autocomplete='off' class='form-control hitSearch date-time-range-picker' id='searchCreatedOn'></th></tr></thead><tfoot class='thead-light'><tr><th>Sr #</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Role</th><th>Created On</th></tr></tfoot></table></div></div></div><?php require('required/admin-modals.php'); ?></main><?php require('required/footer.php'); ?>