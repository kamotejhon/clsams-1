<style>
.form-div { margin-top: 100px; border: 1px solid #e0e0e0; }
#profileDisplay {
  display: block;
  height: 50%;
  width: 30%;
  margin: 0px auto;
  border-radius: 10%;
}
.img-placeholder {
  width: 30%;
  color: white;
  margin-bottom: 50%;
  background: black;
  opacity: .7;
  height: 310px;
  border-radius: 10%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 5%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
</style>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid ">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0">Profile</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->

  <div class="content">
    <div class="container-fluid">
      <div class="card card-default">
          <form action="<?= base_url("admin/profile")?>/<?= isset($rec) ? 'edit/'.esc($rec['id']): 'add'?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group text-center"  >
                      <span class="img-div">
                        <div class="text-center img-placeholder"  onClick="triggerClick()">
                          <h4>Change Photo</h4>
                        </div>
                        <img src="<?= ($rec['profile_image'] !== '') ? $rec['profile_image']:base_url('/assets/uploads/blank.png')?>" onClick="triggerClick()" class="roundeds" id="profileDisplay">
                      </span>
                      <input type="file" name="profile_image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                      <label>Profile Picture</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="first_name">First name*</label>
                      <input name="first_name" type="text" value="<?= isset($rec['first_name']) ? $rec['first_name'] : set_value('first_name') ?>" class="form-control <?= isset($errors['first_name']) ? 'is-invalid':' ' ?>" id="first_name" placeholder="First Name">
                      <?php if(isset($errors['first_name'])):?>
                        <p class="text-danger"><?=esc($errors['first_name'])?><p>
                      <?php endif;?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="last_name">Last Name*</label>
                      <input name="last_name" type="text" value="<?= isset($rec['last_name']) ? $rec['last_name'] : set_value('last_name') ?>" class="form-control <?= isset($errors['last_name']) ? 'is-invalid':' '  ?>" id="last_name" placeholder="Last Name">
                      <?php if(isset($errors['last_name'])):?>
                        <p class="text-danger"><?=esc($errors['last_name'])?><p>
                      <?php endif;?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="m_initial">M Initial*</label>
                      <input name="m_initial" type="text" value="<?= isset($rec['m_initial']) ? $rec['m_initial'] : set_value('m_initial') ?>" class="form-control <?= isset($errors['m_initial']) ? 'is-invalid':' '  ?>" id="m_initial" placeholder="M Initial">
                      <?php if(isset($errors['m_initial'])):?>
                        <p class="text-danger"><?=esc($errors['m_initial'])?><p>
                      <?php endif;?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="student_num">Faculty Number: </label>
                      <td><?=esc($rec['year'].'-'.$rec['section'])?></td>
                      <input name="username" type="text" value="<?= isset($rec['username']) ? $rec['username'] : set_value('username') ?>" class="form-control <?= isset($errors['username']) ? 'is-invalid':' '  ?>" id="username" placeholder="User name">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="username">User Name*</label>
                      <input name="username" type="text" value="<?= isset($rec['username']) ? $rec['username'] : set_value('username') ?>" class="form-control <?= isset($errors['username']) ? 'is-invalid':' '  ?>" id="username" placeholder="User name">
                      <?php if(isset($errors['username'])):?>
                        <p class="text-danger"><?=esc($errors['username'])?><p>
                      <?php endif;?>
                    </div>
                  </div>
                </div>
                        
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="student_num">Address: </label>
                      <input name="address" type="text" value="<?= isset($rec['address']) ? $rec['address'] : set_value('address') ?>" class="form-control  ? 'is-invalid':' '  ?>" id="address" placeholder="Address">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="student_num">Contact Number: </label>
                      <input name="contact_num" type="text" value="<?= isset($rec['contact_num']) ? $rec['contact_num'] : set_value('contact_num') ?>" class="form-control  ? 'is-invalid':' '  ?>" id="contact_num" placeholder="Contact Number">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="student_num">Email: </label>
                      <input name="Email" type="text" value="<?= isset($rec['Email']) ? $rec['Email'] : set_value('Email') ?>" class="form-control  ? 'is-invalid':' '  ?>" id="Email" placeholder="Email">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 offset-md-5">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                  </div>
                </div>
            </div>
          </form>
      </div>
    </div>
  </div>


    <!-- /.content -->
</div>

<script src="<?=base_url();?>/plugins/inputmask/inputmask.min.js"></script>
  <script src="<?=base_url();?>/plugins/inputmask/inputmask.extensions.min.js"></script>
  <script type="text/javascript">
    var role = '<?= $_SESSION['rid'];?>';
    $(function(){
      if(role == '3'){
        var inputmask = new Inputmask("9999-99999-TG-9");
          inputmask.mask($('[id*=username]'));

        $('[id*=username]').on('keypress', function (e) {
            var number = $(this).val();
            if (number.length == 2) {
                $(this).val($(this).val() + '-');
            }
            else if (number.length == 7) {
                $(this).val($(this).val() + '-');
            }
        });
      }





      setTimeout(function(){
        $('.alert').hide();
      },5000);
    });

    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password" ) {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }

    function triggerClick(e) {
      document.querySelector('#profileImage').click();
    }
    function displayImage(e) {
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>
